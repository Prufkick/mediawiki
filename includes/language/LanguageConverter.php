<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Zhengzhu Feng <zhengzhu@gmail.com>
 * @author fdcn <fdcn64@gmail.com>
 * @author shinjiman <shinjiman@gmail.com>
 * @author PhiLiP <philip.npc@gmail.com>
 */
use MediaWiki\Linker\LinkTarget;
use MediaWiki\Logger\LoggerFactory;
use MediaWiki\MediaWikiServices;
use MediaWiki\Page\PageReference;
use MediaWiki\Revision\RevisionRecord;
use MediaWiki\Revision\SlotRecord;

/**
 * Base class for multi-variant language conversion.
 *
 * @ingroup Language
 */
abstract class LanguageConverter implements ILanguageConverter {
	use DeprecationHelper;

	/**
	 * languages supporting variants
	 * @since 1.20
	 * @var array
	 */
	public static $languagesWithVariants = [
		'ban',
		'en',
		'crh',
		'gan',
		'iu',
		'kk',
		'ku',
		'shi',
		'sr',
		'tg',
		'uz',
		'zh',
	];

	private $mTablesLoaded = false;

	/**
	 * @var ReplacementArray[]|bool[]
	 */
	protected $mTables;

	/**
	 * @var Language
	 */
	private $mLangObj;

	private $mUcfirst = false;
	private $mConvRuleTitle = false;
	private $mURLVariant;
	private $mUserVariant;
	private $mHeaderVariant;
	private $mMaxDepth = 10;
	private $mVarSeparatorPattern;

	private const CACHE_VERSION_KEY = 'VERSION 7';

	/**
	 * @param Language $langobj
	 */
	public function __construct( $langobj ) {
		$this->deprecatePublicProperty( 'mUcfirst', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mConvRuleTitle', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mUserVariant', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mHeaderVariant', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mMaxDepth = 10', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mVarSeparatorPattern', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mLangObj', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mVariantFallbacks', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mTablesLoaded', '1.35', __CLASS__ );
		$this->deprecatePublicProperty( 'mTables', '1.35', __CLASS__ );

		$this->mLangObj = $langobj;

		$this->deprecatePublicPropertyFallback( 'mVariants', '1.36', function () {
			return $this->getVariants();
		} );

		$this->deprecatePublicPropertyFallback( 'mMainLanguageCode', '1.36', function () {
			return $this->getMainCode();
		} );

		$this->deprecatePublicPropertyFallback( 'mVariantFallbacks', '1.36', function () {
			return $this->getVariantsFallbacks();
		} );

		$this->deprecatePublicPropertyFallback( 'mFlags', '1.36', function () {
			return $this->getFlags();
		} );

		$this->deprecatePublicPropertyFallback( 'mVariantNames', '1.36', function () {
			return $this->getVariantNames();
		} );

		$this->deprecatePublicPropertyFallback( 'mDescCodeSep', '1.36', function () {
			return $this->getDescCodeSeparator();
		} );

		$this->deprecatePublicPropertyFallback( 'mDescVarSep', '1.36', function () {
			return $this->getDescVarSeparator();
		} );
	}

	/**
	 * Get main language code.
	 * @since 1.36
	 *
	 * @return string
	 */
	abstract public function getMainCode(): string;

	/**
	 * Get supported variants of the language.
	 * @since 1.36
	 *
	 * @return array
	 */
	abstract protected function getLanguageVariants(): array;

	/**
	 * Get language variants fallbacks.
	 * @since 1.36
	 *
	 * @return array
	 */
	abstract public function getVariantsFallbacks(): array;

	/**
	 * Get strings that maps to the flags.
	 * @since 1.36
	 *
	 * @return array
	 */
	final public function getFlags(): array {
		$defaultflags = [
			// 'S' show converted text
			// '+' add rules for alltext
			// 'E' the gave flags is error
			// these flags above are reserved for program
			'A' => 'A',   // add rule for convert code (all text convert)
			'T' => 'T',   // title convert
			'R' => 'R',   // raw content
			'D' => 'D',   // convert description (subclass implement)
			'-' => '-',   // remove convert (not implement)
			'H' => 'H',   // add rule for convert code (but no display in placed code)
			'N' => 'N',   // current variant name
		];
		$flags = array_merge( $defaultflags, $this->getAdditionalFlags() );
		foreach ( $this->getVariants() as $v ) {
			$flags[$v] = $v;
		}
		return $flags;
	}

	/**
	 * Provides additional flags for converter. By default it return empty array and
	 * typically should be overridden by implementation of converter.
	 *
	 * @return array
	 */
	protected function getAdditionalFlags(): array {
		return [];
	}

	/**
	 * Get manual level limit for supported variants.
	 * @since 1.36
	 *
	 * @return array
	 */
	final public function getManualLevel() {
		$manualLevel  = $this->getAdditionalManualLevel();
		$result = [];
		foreach ( $this->getVariants() as $v ) {
			if ( array_key_exists( $v, $manualLevel ) ) {
				$result[$v] = $manualLevel[$v];
			} else {
				$result[$v] = 'bidirectional';
			}
		}
		return $result;
	}

	/**
	 * Provides additional flags for converter. By default it return empty array and
	 * typically should be overridden by implementation of converter.
	 * @since 1.36
	 *
	 * @return array
	 */
	protected function getAdditionalManualLevel(): array {
		return [];
	}

	/**
	 * Get desc code separator. By default returns ":", can be overridden by
	 * implementation of converter.
	 * @since 1.36
	 *
	 * @return string
	 */
	public function getDescCodeSeparator(): string {
		return ':';
	}

	/**
	 * Get desc var separator. By default returns ";", can be overridden by
	 * implementation of converter.
	 * @since 1.36
	 *
	 * @return string
	 */
	public function getDescVarSeparator(): string {
		return ';';
	}

	/**
	 * Get variant names.
	 *
	 * @return array
	 */
	public function getVariantNames(): array {
		return MediaWikiServices::getInstance()
			->getLanguageNameUtils()
			->getLanguageNames();
	}

	/**
	 * Get all valid variants for current Coverter. It uses abstract
	 *
	 * @return string[] Contains all valid variants
	 */
	final public function getVariants() {
		global $wgDisabledVariants;
		return array_diff( $this->getLanguageVariants(), $wgDisabledVariants );
	}

	/**
	 * In case some variant is not defined in the markup, we need
	 * to have some fallback. For example, in zh, normally people
	 * will define zh-hans and zh-hant, but less so for zh-sg or zh-hk.
	 * when zh-sg is preferred but not defined, we will pick zh-hans
	 * in this case. Right now this is only used by zh.
	 *
	 * @param string $variant The language code of the variant
	 * @return string|array The code of the fallback language or the
	 *   main code if there is no fallback
	 */
	public function getVariantFallbacks( $variant ) {
		return $this->getVariantsFallbacks()[$variant] ?? $this->getMainCode();
	}

	/**
	 * Get the title produced by the conversion rule.
	 * @return string|false The converted title text
	 */
	public function getConvRuleTitle() {
		return $this->mConvRuleTitle;
	}

	/**
	 * Get preferred language variant.
	 * @return string The preferred language code
	 */
	public function getPreferredVariant() {
		global $wgDefaultLanguageVariant;

		$req = $this->getURLVariant();

		Hooks::runner()->onGetLangPreferredVariant( $req );

		$user = RequestContext::getMain()->getUser();
		// NOTE: For some calls there may not be a context user or session that is safe
		// to use, see (T235360)
		// Use case: During autocreation, UserNameUtils::isUsable is called which uses interface
		// messages for reserved usernames.
		if ( $user->isSafeToLoad() && $user->isRegistered() && !$req ) {
			$req = $this->getUserVariant( $user );
		} elseif ( !$req ) {
			$req = $this->getHeaderVariant();
		}

		if ( $wgDefaultLanguageVariant && !$req ) {
			$req = $this->validateVariant( $wgDefaultLanguageVariant );
		}

		$req = $this->validateVariant( $req );

		// This function, unlike the other get*Variant functions, is
		// not memoized (i.e. there return value is not cached) since
		// new information might appear during processing after this
		// is first called.
		if ( $req ) {
			return $req;
		}
		return $this->getMainCode();
	}

	/**
	 * This function would not be affected by user's settings
	 * @return string The default variant code
	 */
	public function getDefaultVariant() {
		global $wgDefaultLanguageVariant;

		$req = $this->getURLVariant();

		if ( !$req ) {
			$req = $this->getHeaderVariant();
		}

		if ( $wgDefaultLanguageVariant && !$req ) {
			$req = $this->validateVariant( $wgDefaultLanguageVariant );
		}

		if ( $req ) {
			return $req;
		}
		return $this->getMainCode();
	}

	/**
	 * Validate the variant and return an appropriate strict internal
	 * variant code if one exists.  Compare to Language::hasVariant()
	 * which does a strict test.
	 *
	 * @param string|null $variant The variant to validate
	 * @return mixed Returns an equivalent valid variant code if possible,
	 *   null otherwise
	 */
	public function validateVariant( $variant = null ) {
		if ( $variant === null ) {
			return null;
		}
		// Our internal variants are always lower-case; the variant we
		// are validating may have mixed case.
		$variant = LanguageCode::replaceDeprecatedCodes( strtolower( $variant ) );
		if ( in_array( $variant, $this->getVariants() ) ) {
			return $variant;
		}
		// Browsers are supposed to use BCP 47 standard in the
		// Accept-Language header, but not all of our internal
		// mediawiki variant codes are BCP 47.  Map BCP 47 code
		// to our internal code.
		foreach ( $this->getVariants() as $v ) {
			// Case-insensitive match (BCP 47 is mixed case)
			if ( strtolower( LanguageCode::bcp47( $v ) ) === $variant ) {
				return $v;
			}
		}
		return null;
	}

	/**
	 * Get the variant specified in the URL
	 *
	 * @return mixed Variant if one found, null otherwise
	 */
	public function getURLVariant() {
		global $wgRequest;

		if ( $this->mURLVariant ) {
			return $this->mURLVariant;
		}

		// see if the preference is set in the request
		$ret = $wgRequest->getText( 'variant' );

		if ( !$ret ) {
			$ret = $wgRequest->getVal( 'uselang' );
		}

		$this->mURLVariant = $this->validateVariant( $ret );
		return $this->mURLVariant;
	}

	/**
	 * Determine if the user has a variant set.
	 *
	 * @param User $user
	 * @return mixed Variant if one found, null otherwise
	 */
	protected function getUserVariant( User $user ) {
		// This should only be called within the class after the user is known to be
		// safe to load and logged in, but check just in case.
		if ( !$user->isSafeToLoad() ) {
			return false;
		}

		if ( !$this->mUserVariant ) {
			$services = MediaWikiServices::getInstance();
			if ( $user->isRegistered() ) {
				// Get language variant preference from logged in users
				if (
					$this->getMainCode() ==
					$services->getContentLanguage()->getCode()
				) {
					$optionName = 'variant';
				} else {
					$optionName = 'variant-' . $this->getMainCode();
				}
			} else {
				// figure out user lang without constructing wgLang to avoid
				// infinite recursion
				$optionName = 'language';
			}
			$ret = $services->getUserOptionsLookup()->getOption( $user, $optionName );

			$this->mUserVariant = $this->validateVariant( $ret );
		}

		return $this->mUserVariant;
	}

	/**
	 * Determine the language variant from the Accept-Language header.
	 *
	 * @return mixed Variant if one found, null otherwise
	 */
	protected function getHeaderVariant() {
		global $wgRequest;

		if ( $this->mHeaderVariant ) {
			return $this->mHeaderVariant;
		}

		// See if some supported language variant is set in the
		// HTTP header.
		$languages = array_keys( $wgRequest->getAcceptLang() );
		if ( empty( $languages ) ) {
			return null;
		}

		$fallbackLanguages = [];
		foreach ( $languages as $language ) {
			$this->mHeaderVariant = $this->validateVariant( $language );
			if ( $this->mHeaderVariant ) {
				break;
			}

			// To see if there are fallbacks of current language.
			// We record these fallback variants, and process
			// them later.
			$fallbacks = $this->getVariantFallbacks( $language );
			if ( is_string( $fallbacks ) && $fallbacks !== $this->getMainCode() ) {
				$fallbackLanguages[] = $fallbacks;
			} elseif ( is_array( $fallbacks ) ) {
				$fallbackLanguages =
					array_merge( $fallbackLanguages, $fallbacks );
			}
		}

		if ( !$this->mHeaderVariant ) {
			// process fallback languages now
			$fallback_languages = array_unique( $fallbackLanguages );
			foreach ( $fallback_languages as $language ) {
				$this->mHeaderVariant = $this->validateVariant( $language );
				if ( $this->mHeaderVariant ) {
					break;
				}
			}
		}

		return $this->mHeaderVariant;
	}

	/**
	 * Dictionary-based conversion.
	 * This function would not parse the conversion rules.
	 * If you want to parse rules, try to use convert() or
	 * convertTo().
	 *
	 * @param string $text The text to be converted
	 * @param bool|string $toVariant The target language code
	 * @return string The converted text
	 */
	public function autoConvert( $text, $toVariant = false ) {
		$this->loadTables();

		if ( !$toVariant ) {
			$toVariant = $this->getPreferredVariant();
			if ( !$toVariant ) {
				return $text;
			}
		}

		if ( $this->guessVariant( $text, $toVariant ) ) {
			return $text;
		}
		/* we convert everything except:
		   1. HTML markups (anything between < and >)
		   2. HTML entities
		   3. placeholders created by the parser
		   IMPORTANT: Beware of failure from pcre.backtrack_limit (T124404).
		   Minimize use of backtracking where possible.
		*/
		static $reg;
		if ( $reg === null ) {
			$marker = '|' . Parser::MARKER_PREFIX . '[^\x7f]++\x7f';

			// this one is needed when the text is inside an HTML markup
			$htmlfix = '|<[^>\004]++(?=\004$)|^[^<>]*+>';

			// Optimize for the common case where these tags have
			// few or no children. Thus try and possesively get as much as
			// possible, and only engage in backtracking when we hit a '<'.

			// disable convert to variants between <code> tags
			$codefix = '<code>[^<]*+(?:(?:(?!<\/code>).)[^<]*+)*+<\/code>|';
			// disable conversion of <script> tags
			$scriptfix = '<script[^>]*+>[^<]*+(?:(?:(?!<\/script>).)[^<]*+)*+<\/script>|';
			// disable conversion of <pre> tags
			$prefix = '<pre[^>]*+>[^<]*+(?:(?:(?!<\/pre>).)[^<]*+)*+<\/pre>|';
			// The "|.*+)" at the end, is in case we missed some part of html syntax,
			// we will fail securely (hopefully) by matching the rest of the string.
			$htmlFullTag = '<(?:[^>=]*+(?>[^>=]*+=\s*+(?:"[^"]*"|\'[^\']*\'|[^\'">\s]*+))*+[^>=]*+>|.*+)|';

			$reg = '/' . $codefix . $scriptfix . $prefix . $htmlFullTag .
				'&[a-zA-Z#][a-z0-9]++;' . $marker . $htmlfix . '|\004$/s';
		}
		$startPos = 0;
		$sourceBlob = '';
		$literalBlob = '';

		// Guard against delimiter nulls in the input
		// (should never happen: see T159174)
		$text = str_replace( "\000", '', $text );
		$text = str_replace( "\004", '', $text );

		$markupMatches = null;
		$elementMatches = null;

		// We add a marker (\004) at the end of text, to ensure we always match the
		// entire text (Otherwise, pcre.backtrack_limit might cause silent failure)
		$textWithMarker = $text . "\004";
		while ( $startPos < strlen( $text ) ) {
			if ( preg_match( $reg, $textWithMarker, $markupMatches, PREG_OFFSET_CAPTURE, $startPos ) ) {
				$elementPos = $markupMatches[0][1];
				$element = $markupMatches[0][0];
				if ( $element === "\004" ) {
					// We hit the end.
					$elementPos = strlen( $text );
					$element = '';
				} elseif ( substr( $element, -1 ) === "\004" ) {
					// This can sometimes happen if we have
					// unclosed html tags (For example
					// when converting a title attribute
					// during a recursive call that contains
					// a &lt; e.g. <div title="&lt;">.
					$element = substr( $element, 0, -1 );
				}
			} else {
				// If we hit here, then Language Converter could be tricked
				// into doing an XSS, so we refuse to translate.
				// If non-crazy input manages to reach this code path,
				// we should consider it a bug.
				$log = LoggerFactory::getInstance( 'languageconverter' );
				$log->error( "Hit pcre.backtrack_limit in " . __METHOD__
					. ". Disabling language conversion for this page.",
					[
						"method" => __METHOD__,
						"variant" => $toVariant,
						"startOfText" => substr( $text, 0, 500 )
					]
				);
				return $text;
			}
			// Queue the part before the markup for translation in a batch
			$sourceBlob .= substr( $text, $startPos, $elementPos - $startPos ) . "\000";

			// Advance to the next position
			$startPos = $elementPos + strlen( $element );

			// Translate any alt or title attributes inside the matched element
			if ( $element !== ''
				&& preg_match( '/^(<[^>\s]*+)\s([^>]*+)(.*+)$/', $element, $elementMatches )
			) {
				// FIXME, this decodes entities, so if you have something
				// like <div title="foo&lt;bar"> the bar won't get
				// translated since after entity decoding it looks like
				// unclosed html and we call this method recursively
				// on attributes.
				$attrs = Sanitizer::decodeTagAttributes( $elementMatches[2] );
				// Ensure self-closing tags stay self-closing.
				$close = substr( $elementMatches[2], -1 ) === '/' ? ' /' : '';
				$changed = false;
				foreach ( [ 'title', 'alt' ] as $attrName ) {
					if ( !isset( $attrs[$attrName] ) ) {
						continue;
					}
					$attr = $attrs[$attrName];
					// Don't convert URLs
					if ( !strpos( $attr, '://' ) ) {
						$attr = $this->recursiveConvertTopLevel( $attr, $toVariant );
					}

					if ( $attr !== $attrs[$attrName] ) {
						$attrs[$attrName] = $attr;
						$changed = true;
					}
				}
				if ( $changed ) {
					// @phan-suppress-next-line SecurityCheck-DoubleEscaped Explained above with decodeTagAttributes
					$element = $elementMatches[1] . Html::expandAttributes( $attrs ) .
						$close . $elementMatches[3];
				}
			}
			$literalBlob .= $element . "\000";
		}

		// Do the main translation batch
		$translatedBlob = $this->translate( $sourceBlob, $toVariant );

		// Put the output back together
		$translatedIter = StringUtils::explode( "\000", $translatedBlob );
		$literalIter = StringUtils::explode( "\000", $literalBlob );
		$output = '';
		while ( $translatedIter->valid() && $literalIter->valid() ) {
			$output .= $translatedIter->current();
			$output .= $literalIter->current();
			$translatedIter->next();
			$literalIter->next();
		}

		return $output;
	}

	/**
	 * Translate a string to a variant.
	 * Doesn't parse rules or do any of that other stuff, for that use
	 * convert() or convertTo().
	 *
	 * @param string $text Text to convert
	 * @param string $variant Variant language code
	 * @return string Translated text
	 */
	public function translate( $text, $variant ) {
		// If $text is empty or only includes spaces, do nothing
		// Otherwise translate it
		if ( trim( $text ) ) {
			$this->loadTables();
			$text = $this->mTables[$variant]->replace( $text );
		}
		return $text;
	}

	/**
	 * Call translate() to convert text to all valid variants.
	 *
	 * @param string $text The text to be converted
	 * @return array Variant => converted text
	 */
	public function autoConvertToAllVariants( $text ) {
		$this->loadTables();

		$ret = [];
		foreach ( $this->getVariants() as $variant ) {
			$ret[$variant] = $this->translate( $text, $variant );
		}

		return $ret;
	}

	/**
	 * Apply manual conversion rules.
	 *
	 * @param ConverterRule $convRule
	 */
	protected function applyManualConv( ConverterRule $convRule ) {
		// Use syntax -{T|zh-cn:TitleCN; zh-tw:TitleTw}- to custom
		// title conversion.
		// T26072: $mConvRuleTitle was overwritten by other manual
		// rule(s) not for title, this breaks the title conversion.
		$newConvRuleTitle = $convRule->getTitle();
		if ( $newConvRuleTitle !== false ) {
			// So I add an empty check for getTitle()
			$this->mConvRuleTitle = $newConvRuleTitle;
		}

		// merge/remove manual conversion rules to/from global table
		$convTable = $convRule->getConvTable();
		$action = $convRule->getRulesAction();
		foreach ( $convTable as $variant => $pair ) {
			$v = $this->validateVariant( $variant );
			if ( !$v ) {
				continue;
			}

			if ( $action == 'add' ) {
				// More efficient than array_merge(), about 2.5 times.
				foreach ( $pair as $from => $to ) {
					$this->mTables[$v]->setPair( $from, $to );
				}
			} elseif ( $action == 'remove' ) {
				$this->mTables[$v]->removeArray( $pair );
			}
		}
	}

	/**
	 * Auto convert a LinkTarget or PageReference to a readable string in the
	 * preferred variant.
	 *
	 * @param LinkTarget|PageReference $title
	 * @return string Converted title text
	 */
	public function convertTitle( $title ) {
		$variant = $this->getPreferredVariant();
		$index = $title->getNamespace();
		if ( $index !== NS_MAIN ) {
			$text = $this->convertNamespace( $index, $variant ) . ':';
		} else {
			$text = '';
		}
		$name = str_replace( '_', ' ', $title->getDBKey() );
		$text .= $this->translate( $name, $variant );

		return $text;
	}

	/**
	 * Get the namespace display name in the preferred variant.
	 *
	 * @param int $index Namespace id
	 * @param string|null $variant Variant code or null for preferred variant
	 * @return string Namespace name for display
	 */
	public function convertNamespace( $index, $variant = null ) {
		if ( $index === NS_MAIN ) {
			return '';
		}

		if ( $variant === null ) {
			$variant = $this->getPreferredVariant();
		}

		$cache = MediaWikiServices::getInstance()->getLocalServerObjectCache();
		$key = $cache->makeKey( 'languageconverter', 'namespace-text', $index, $variant );
		return $cache->getWithSetCallback(
			$key,
			BagOStuff::TTL_MINUTE,
			function () use ( $index, $variant ) {
				return $this->computeNsVariantText( $index, $variant );
			}
		);
	}

	/**
	 * @param int $index
	 * @param string|null $variant
	 * @return string
	 */
	private function computeNsVariantText( int $index, ?string $variant ): string {
		$nsVariantText = false;

		// First check if a message gives a converted name in the target variant.
		$nsConvMsg = wfMessage( 'conversion-ns' . $index )->inLanguage( $variant );
		if ( $nsConvMsg->exists() ) {
			$nsVariantText = $nsConvMsg->plain();
		}

		// Then check if a message gives a converted name in content language
		// which needs extra translation to the target variant.
		if ( $nsVariantText === false ) {
			$nsConvMsg = wfMessage( 'conversion-ns' . $index )->inContentLanguage();
			if ( $nsConvMsg->exists() ) {
				$nsVariantText = $this->translate( $nsConvMsg->plain(), $variant );
			}
		}

		if ( $nsVariantText === false ) {
			// No message exists, retrieve it from the target variant's namespace names.
			$mLangObj = MediaWikiServices::getInstance()
				->getLanguageFactory()
				->getLanguage( $variant );
			$nsVariantText = $mLangObj->getFormattedNsText( $index );
		}
		return $nsVariantText;
	}

	/**
	 * Convert text to different variants of a language. The automatic
	 * conversion is done in autoConvert(). Here we parse the text
	 * marked with -{}-, which specifies special conversions of the
	 * text that can not be accomplished in autoConvert().
	 *
	 * Syntax of the markup:
	 * -{code1:text1;code2:text2;...}-  or
	 * -{flags|code1:text1;code2:text2;...}-  or
	 * -{text}- in which case no conversion should take place for text
	 *
	 * @warning Glossary state is maintained between calls. Never feed this
	 *   method input that hasn't properly been escaped as it may result in
	 *   an XSS in subsequent calls, even if those subsequent calls properly
	 *   escape things.
	 * @param string $text Text to be converted, already html escaped.
	 * @return string Converted text (html)
	 */
	public function convert( $text ) {
		$variant = $this->getPreferredVariant();
		return $this->convertTo( $text, $variant );
	}

	/**
	 * Same as convert() except a extra parameter to custom variant.
	 *
	 * @param string $text Text to be converted, already html escaped
	 * @param-taint $text exec_html
	 * @param string $variant The target variant code
	 * @return string Converted text
	 * @return-taint escaped
	 */
	public function convertTo( $text, $variant ) {
		$languageConverterFactory = MediaWikiServices::getInstance()->getLanguageConverterFactory();
		if ( $languageConverterFactory->isConversionDisabled() ) {
			return $text;
		}
		// Reset converter state for a new converter run.
		$this->mConvRuleTitle = false;
		return $this->recursiveConvertTopLevel( $text, $variant );
	}

	/**
	 * Recursively convert text on the outside. Allow to use nested
	 * markups to custom rules.
	 *
	 * @param string $text Text to be converted
	 * @param string $variant The target variant code
	 * @param int $depth Depth of recursion
	 * @return string Converted text
	 */
	protected function recursiveConvertTopLevel( $text, $variant, $depth = 0 ) {
		$startPos = 0;
		$out = '';
		$length = strlen( $text );
		$shouldConvert = !$this->guessVariant( $text, $variant );
		$continue = true;

		$noScript = '<script.*?>.*?<\/script>(*SKIP)(*FAIL)';
		$noStyle = '<style.*?>.*?<\/style>(*SKIP)(*FAIL)';
		// phpcs:ignore Generic.Files.LineLength
		$noHtml = '<(?:[^>=]*+(?>[^>=]*+=\s*+(?:"[^"]*"|\'[^\']*\'|[^\'">\s]*+))*+[^>=]*+>|.*+)(*SKIP)(*FAIL)';
		while ( $startPos < $length && $continue ) {
			$continue = preg_match(
				// Only match -{ outside of html.
				"/$noScript|$noStyle|$noHtml|-\{/",
				$text,
				$m,
				PREG_OFFSET_CAPTURE,
				$startPos
			);

			if ( !$continue ) {
				// No more markup, append final segment
				$fragment = substr( $text, $startPos );
				$out .= $shouldConvert ? $this->autoConvert( $fragment, $variant ) : $fragment;
				return $out;
			}

			// Offset of the match of the regex pattern.
			$pos = $m[0][1];

			// Append initial segment
			$fragment = substr( $text, $startPos, $pos - $startPos );
			$out .= $shouldConvert ? $this->autoConvert( $fragment, $variant ) : $fragment;
			// -{ marker found, not in attribute
			// Advance position up to -{ marker.
			$startPos = $pos;
			// Do recursive conversion
			// Note: This passes $startPos by reference, and advances it.
			$out .= $this->recursiveConvertRule( $text, $variant, $startPos, $depth + 1 );
		}
		return $out;
	}

	/**
	 * Recursively convert text on the inside.
	 *
	 * @param string $text Text to be converted
	 * @param string $variant The target variant code
	 * @param int &$startPos
	 * @param int $depth Depth of recursion
	 *
	 * @throws MWException
	 * @return string Converted text
	 */
	protected function recursiveConvertRule( $text, $variant, &$startPos, $depth = 0 ) {
		// Quick check (no function calls)
		if ( $text[$startPos] !== '-' || $text[$startPos + 1] !== '{' ) {
			throw new MWException( __METHOD__ . ': invalid input string' );
		}

		$startPos += 2;
		$inner = '';
		$warningDone = false;
		$length = strlen( $text );

		while ( $startPos < $length ) {
			$m = false;
			preg_match( '/-\{|\}-/', $text, $m, PREG_OFFSET_CAPTURE, $startPos );
			if ( !$m ) {
				// Unclosed rule
				break;
			}

			$token = $m[0][0];
			$pos = $m[0][1];

			// Markup found
			// Append initial segment
			$inner .= substr( $text, $startPos, $pos - $startPos );

			// Advance position
			$startPos = $pos;

			switch ( $token ) {
				case '-{':
					// Check max depth
					if ( $depth >= $this->mMaxDepth ) {
						$inner .= '-{';
						if ( !$warningDone ) {
							$inner .= '<span class="error">' .
								wfMessage( 'language-converter-depth-warning' )
									->numParams( $this->mMaxDepth )->inContentLanguage()->text() .
								'</span>';
							$warningDone = true;
						}
						$startPos += 2;
						break;
					}
					// Recursively parse another rule
					$inner .= $this->recursiveConvertRule( $text, $variant, $startPos, $depth + 1 );
					break;
				case '}-':
					// Apply the rule
					$startPos += 2;
					$rule = new ConverterRule( $inner, $this );
					$rule->parse( $variant );
					$this->applyManualConv( $rule );
					return $rule->getDisplay();
				default:
					throw new MWException( __METHOD__ . ': invalid regex match' );
			}
		}

		// Unclosed rule
		if ( $startPos < $length ) {
			$inner .= substr( $text, $startPos );
		}
		$startPos = $length;
		return '-{' . $this->autoConvert( $inner, $variant );
	}

	/**
	 * If a language supports multiple variants, it is possible that
	 * non-existing link in one variant actually exists in another variant.
	 * This function tries to find it. See e.g. LanguageZh.php
	 * The input parameters may be modified upon return
	 *
	 * @param string &$link The name of the link
	 * @param Title &$nt The title object of the link
	 * @param bool $ignoreOtherCond To disable other conditions when
	 *   we need to transclude a template or update a category's link
	 */
	public function findVariantLink( &$link, &$nt, $ignoreOtherCond = false ) {
		# If the article has already existed, there is no need to
		# check it again, otherwise it may cause a fault.
		if ( is_object( $nt ) && $nt->exists() ) {
			return;
		}

		global $wgRequest;
		$isredir = $wgRequest->getText( 'redirect', 'yes' );
		$action = $wgRequest->getText( 'action' );
		if ( $action == 'edit' && $wgRequest->getBool( 'redlink' ) ) {
			$action = 'view';
		}
		$linkconvert = $wgRequest->getText( 'linkconvert', 'yes' );
		$disableLinkConversion =
			MediaWikiServices::getInstance()->getLanguageConverterFactory()
			->isLinkConversionDisabled();
		$linkBatchFactory = MediaWikiServices::getInstance()->getLinkBatchFactory();
		$linkBatch = $linkBatchFactory->newLinkBatch();

		$ns = NS_MAIN;

		if ( $disableLinkConversion ||
			( !$ignoreOtherCond &&
				( $isredir == 'no'
					|| $action == 'edit'
					|| $action == 'submit'
					|| $linkconvert == 'no' ) ) ) {
			return;
		}

		if ( is_object( $nt ) ) {
			$ns = $nt->getNamespace();
		}

		$variants = $this->autoConvertToAllVariants( $link );
		if ( !$variants ) { // give up
			return;
		}

		$titles = [];

		foreach ( $variants as $v ) {
			if ( $v != $link ) {
				$varnt = Title::newFromText( $v, $ns );
				if ( $varnt !== null ) {
					$linkBatch->addObj( $varnt );
					$titles[] = $varnt;
				}
			}
		}

		// fetch all variants in single query
		$linkBatch->execute();

		foreach ( $titles as $varnt ) {
			if ( $varnt->getArticleID() > 0 ) {
				$nt = $varnt;
				$link = $varnt->getText();
				break;
			}
		}
	}

	/**
	 * Returns language specific hash options.
	 *
	 * @return string
	 */
	public function getExtraHashOptions() {
		$variant = $this->getPreferredVariant();

		return '!' . $variant;
	}

	/**
	 * Guess if a text is written in a variant. This should be implemented in subclasses.
	 *
	 * @param string $text The text to be checked
	 * @param string $variant Language code of the variant to be checked for
	 * @return bool True if $text appears to be written in $variant, false if not
	 *
	 * @author Nikola Smolenski <smolensk@eunet.rs>
	 * @since 1.19
	 */
	public function guessVariant( $text, $variant ) {
		return false;
	}

	/**
	 * Load default conversion tables.
	 * This method must be implemented in derived class.
	 *
	 * @throws MWException
	 */
	protected function loadDefaultTables() {
		$class = static::class;
		throw new MWException( "Must implement loadDefaultTables() method in class $class" );
	}

	/**
	 * Load conversion tables either from the cache or the disk.
	 * @private
	 * @param bool $fromCache Load from memcached? Defaults to true.
	 */
	protected function loadTables( $fromCache = true ) {
		global $wgLanguageConverterCacheType;

		if ( $this->mTablesLoaded ) {
			return;
		}

		$this->mTablesLoaded = true;
		// Do not use null as starting value, as that would confuse phan a lot.
		$this->mTables = [];
		$cache = ObjectCache::getInstance( $wgLanguageConverterCacheType );
		$cacheKey = $cache->makeKey( 'conversiontables', $this->getMainCode() );
		if ( $fromCache ) {
			$this->mTables = $cache->get( $cacheKey );
		}
		if ( !$this->mTables || !array_key_exists( self::CACHE_VERSION_KEY, $this->mTables ) ) {
			// not in cache, or we need a fresh reload.
			// We will first load the default tables
			// then update them using things in MediaWiki:Conversiontable/*
			$this->loadDefaultTables();
			foreach ( $this->getVariants() as $var ) {
				$cached = $this->parseCachedTable( $var );
				// @phan-suppress-next-next-line PhanTypeArraySuspiciousNullable
				// FIXME: $this->mTables could theoretically be null here
				$this->mTables[$var]->mergeArray( $cached );
			}

			$this->postLoadTables();
			$this->mTables[self::CACHE_VERSION_KEY] = true;

			$cache->set( $cacheKey, $this->mTables, 43200 );
		}
	}

	/**
	 * Hook for post processing after conversion tables are loaded.
	 */
	protected function postLoadTables() {
	}

	/**
	 * Reload the conversion tables.
	 *
	 * Also used by test suites which need to reset the converter state.
	 *
	 * Called by ParserTestRunner with the help of TestingAccessWrapper
	 */
	private function reloadTables() {
		if ( $this->mTables ) {
			// @phan-suppress-next-line PhanTypeObjectUnsetDeclaredProperty
			unset( $this->mTables );
		}

		$this->mTablesLoaded = false;
		$this->loadTables( false );
	}

	/**
	 * Parse the conversion table stored in the cache.
	 *
	 * The tables should be in blocks of the following form:
	 * 		-{
	 * 			word => word ;
	 * 			word => word ;
	 * 			...
	 * 		}-
	 *
	 * To make the tables more manageable, subpages are allowed
	 * and will be parsed recursively if $recursive == true.
	 *
	 * @param string $code Language code
	 * @param string $subpage Subpage name
	 * @param bool $recursive Parse subpages recursively? Defaults to true.
	 *
	 * @return array
	 */
	private function parseCachedTable( $code, $subpage = '', $recursive = true ) {
		static $parsed = [];

		$key = 'Conversiontable/' . $code;
		if ( $subpage ) {
			$key .= '/' . $subpage;
		}
		if ( array_key_exists( $key, $parsed ) ) {
			return [];
		}

		$parsed[$key] = true;

		if ( $subpage === '' ) {
			$messageCache = MediaWikiServices::getInstance()->getMessageCache();
			$txt = $messageCache->getMsgFromNamespace( $key, $code );
		} else {
			$txt = false;
			$title = Title::makeTitleSafe( NS_MEDIAWIKI, $key );
			if ( $title && $title->exists() ) {
				$revision = MediaWikiServices::getInstance()
					->getRevisionLookup()
					->getRevisionByTitle( $title );
				if ( $revision ) {
					$model = $revision->getSlot(
						SlotRecord::MAIN,
						RevisionRecord::RAW
					)->getModel();
					if ( $model == CONTENT_MODEL_WIKITEXT ) {
						// @phan-suppress-next-line PhanUndeclaredMethod
						$txt = $revision->getContent(
							SlotRecord::MAIN,
							RevisionRecord::RAW
						)->getText();
					}

					// @todo in the future, use a specialized content model, perhaps based on json!
				}
			}
		}

		# Nothing to parse if there's no text
		if ( $txt === false || $txt === null || $txt === '' ) {
			return [];
		}

		// get all subpage links of the form
		// [[MediaWiki:Conversiontable/zh-xx/...|...]]
		$linkhead = $this->mLangObj->getNsText( NS_MEDIAWIKI ) .
			':Conversiontable';
		$subs = StringUtils::explode( '[[', $txt );
		$sublinks = [];
		foreach ( $subs as $sub ) {
			$link = explode( ']]', $sub, 2 );
			if ( count( $link ) != 2 ) {
				continue;
			}
			$b = explode( '|', $link[0], 2 );
			$b = explode( '/', trim( $b[0] ), 3 );
			if ( count( $b ) == 3 ) {
				$sublink = $b[2];
			} else {
				$sublink = '';
			}

			if ( $b[0] == $linkhead && $b[1] == $code ) {
				$sublinks[] = $sublink;
			}
		}

		// parse the mappings in this page
		$blocks = StringUtils::explode( '-{', $txt );
		$ret = [];
		$first = true;
		foreach ( $blocks as $block ) {
			if ( $first ) {
				// Skip the part before the first -{
				$first = false;
				continue;
			}
			$mappings = explode( '}-', $block, 2 )[0];
			$stripped = str_replace( [ "'", '"', '*', '#' ], '', $mappings );
			$table = StringUtils::explode( ';', $stripped );
			foreach ( $table as $t ) {
				$m = explode( '=>', $t, 3 );
				if ( count( $m ) != 2 ) {
					continue;
				}
				// trim any trailling comments starting with '//'
				$tt = explode( '//', $m[1], 2 );
				$ret[trim( $m[0] )] = trim( $tt[0] );
			}
		}

		// recursively parse the subpages
		if ( $recursive ) {
			foreach ( $sublinks as $link ) {
				$s = $this->parseCachedTable( $code, $link, $recursive );
				$ret = $s + $ret;
			}
		}

		if ( $this->mUcfirst ) {
			foreach ( $ret as $k => $v ) {
				$ret[$this->mLangObj->ucfirst( $k )] = $this->mLangObj->ucfirst( $v );
			}
		}
		return $ret;
	}

	/**
	 * Enclose a string with the "no conversion" tag. This is used by
	 * various functions in the Parser.
	 *
	 * @param string $text Text to be tagged for no conversion
	 * @param bool $noParse Unused
	 * @return string The tagged text
	 */
	public function markNoConversion( $text, $noParse = false ) {
		# don't mark if already marked
		if ( strpos( $text, '-{' ) || strpos( $text, '}-' ) ) {
			return $text;
		}

		$ret = "-{R|$text}-";
		return $ret;
	}

	/**
	 * Convert the sorting key for category links. This should make different
	 * keys that are variants of each other map to the same key.
	 *
	 * @param string $key
	 *
	 * @return string
	 */
	public function convertCategoryKey( $key ) {
		return $key;
	}

	/**
	 * Refresh the cache of conversion tables when
	 * MediaWiki:Conversiontable* is updated.
	 *
	 * @param LinkTarget $linkTarget The LinkTarget of the page being updated
	 */
	public function updateConversionTable( LinkTarget $linkTarget ) {
		if ( $linkTarget->getNamespace() === NS_MEDIAWIKI ) {
			$t = explode( '/', $linkTarget->getDBkey(), 3 );
			$c = count( $t );
			if ( $c > 1 && $t[0] == 'Conversiontable' ) {
				if ( $this->validateVariant( $t[1] ) ) {
					$this->reloadTables();
				}
			}
		}
	}

	/**
	 * Get the cached separator pattern for ConverterRule::parseRules()
	 * @return string
	 */
	public function getVarSeparatorPattern() {
		if ( $this->mVarSeparatorPattern === null ) {
			// varsep_pattern for preg_split:
			// text should be splited by ";" only if a valid variant
			// name exist after the markup, for example:
			//  -{zh-hans:<span style="font-size:120%;">xxx</span>;zh-hant:\
			//  <span style="font-size:120%;">yyy</span>;}-
			// we should split it as:
			//  [
			//    [0] => 'zh-hans:<span style="font-size:120%;">xxx</span>'
			//    [1] => 'zh-hant:<span style="font-size:120%;">yyy</span>'
			//    [2] => ''
			//  ]
			$expandedVariants = [];
			foreach ( $this->getVariants() as $variant ) {
				$expandedVariants[ $variant ] = 1;
				// Accept standard BCP 47 names for variants as well.
				$expandedVariants[ LanguageCode::bcp47( $variant ) ] = 1;
			}
			// Accept old deprecated names for variants
			foreach ( LanguageCode::getDeprecatedCodeMapping() as $old => $new ) {
				if ( isset( $expandedVariants[ $new ] ) ) {
					$expandedVariants[ $old ] = 1;
				}
			}

			$pat = '/;\s*(?=';
			foreach ( $expandedVariants as $variant => $ignore ) {
				// zh-hans:xxx;zh-hant:yyy
				$pat .= $variant . '\s*:|';
				// xxx=>zh-hans:yyy; xxx=>zh-hant:zzz
				$pat .= '[^;]*?=>\s*' . $variant . '\s*:|';
			}
			$pat .= '\s*$)/';
			$this->mVarSeparatorPattern = $pat;
		}
		return $this->mVarSeparatorPattern;
	}

	/**
	 * Check if this is a language with variants
	 *
	 * @since 1.35
	 *
	 * @return bool
	 */
	public function hasVariants() {
		return count( $this->getVariants() ) > 1;
	}

	/**
	 * Strict check if the language has the specific variant.
	 *
	 * Compare to LanguageConverter::validateVariant() which does a more
	 * lenient check and attempts to coerce the given code to a valid one.
	 *
	 * @since 1.35
	 * @param string $variant
	 * @return bool
	 */
	public function hasVariant( $variant ) {
		return $variant && ( $variant === $this->validateVariant( $variant ) );
	}

	/**
	 * Perform output conversion on a string, and encode for safe HTML output.
	 *
	 * @since 1.35
	 *
	 * @param string $text Text to be converted
	 * @return string
	 */
	public function convertHtml( $text ) {
		// @phan-suppress-next-line SecurityCheck-DoubleEscaped convert() is documented to return html
		return htmlspecialchars( $this->convert( $text ) );
	}
}
