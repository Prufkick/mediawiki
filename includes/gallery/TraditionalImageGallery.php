<?php

use MediaWiki\Linker\LinkRenderer;
use MediaWiki\MediaWikiServices;

/**
 * Image gallery.
 *
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
 */

class TraditionalImageGallery extends ImageGalleryBase {
	/**
	 * Return a HTML representation of the image gallery
	 *
	 * For each image in the gallery, display
	 * - a thumbnail
	 * - the image name
	 * - the additional text provided when adding the image
	 * - the size of the image
	 *
	 * @return string
	 */
	public function toHTML() {
		$resolveFilesViaParser = $this->mParser instanceof Parser;
		if ( $resolveFilesViaParser ) {
			$out = $this->mParser->getOutput();
			$repoGroup = null;
			$linkRenderer = $this->mParser->getLinkRenderer();
			$badFileLookup = $this->mParser->getBadFileLookup();
		} else {
			$out = $this->getOutput();
			$services = MediaWikiServices::getInstance();
			$repoGroup = $services->getRepoGroup();
			$linkRenderer = $services->getLinkRenderer();
			$badFileLookup = $services->getBadFileLookup();
		}

		if ( $this->mPerRow > 0 ) {
			$maxwidth = $this->mPerRow * ( $this->mWidths + $this->getAllPadding() );
			$oldStyle = $this->mAttribs['style'] ?? '';
			$this->mAttribs['style'] = "max-width: {$maxwidth}px;" . $oldStyle;
		}

		$attribs = Sanitizer::mergeAttributes(
			[ 'class' => 'gallery mw-gallery-' . $this->mMode ], $this->mAttribs );

		$out->addModules( $this->getModules() );
		$out->addModuleStyles( 'mediawiki.page.gallery.styles' );
		$output = Xml::openElement( 'ul', $attribs );
		if ( $this->mCaption ) {
			$output .= "\n\t<li class='gallerycaption'>{$this->mCaption}</li>";
		}

		if ( $this->mShowFilename ) {
			// Preload LinkCache info for when generating links
			// of the filename below
			$linkBatchFactory = MediaWikiServices::getInstance()->getLinkBatchFactory();
			$lb = $linkBatchFactory->newLinkBatch();
			foreach ( $this->mImages as [ $title, /* see below */ ] ) {
				$lb->addObj( $title );
			}
			$lb->execute();
		}

		$lang = $this->getRenderLang();
		$enableLegacyMediaDOM = $this->getConfig()->get( 'ParserEnableLegacyMediaDOM' );

		# Output each image...
		foreach ( $this->mImages as [ $nt, $text, $alt, $link, $handlerOpts, $loading ] ) {
			// "text" means "caption" here
			/** @var Title $nt */

			$descQuery = false;
			if ( $nt->getNamespace() === NS_FILE ) {
				# Get the file...
				if ( $resolveFilesViaParser ) {
					# Give extensions a chance to select the file revision for us
					$options = [];
					Hooks::runner()->onBeforeParserFetchFileAndTitle(
						$this->mParser, $nt, $options, $descQuery );
					# Fetch and register the file (file title may be different via hooks)
					list( $img, $nt ) = $this->mParser->fetchFileAndTitle( $nt, $options );
				} else {
					$img = $repoGroup->findFile( $nt );
				}
			} else {
				$img = false;
			}

			$params = $this->getThumbParams( $img );
			$transformOptions = $params + $handlerOpts;

			$thumb = false;

			if ( !$img ) {
				# We're dealing with a non-image, spit out the name and be done with it.
				$thumbhtml = "\n\t\t\t" . '<div class="thumb" style="height: '
					. ( $this->getThumbPadding() + $this->mHeights ) . 'px;">'
					. htmlspecialchars( $nt->getText() ) . '</div>';

				if ( $resolveFilesViaParser ) {
					$this->mParser->addTrackingCategory( 'broken-file-category' );
				}
			} elseif ( $this->mHideBadImages &&
				$badFileLookup->isBadFile( $nt->getDBkey(), $this->getContextTitle() )
			) {
				# The image is bad, so just show it as a text link.
				$thumbhtml = "\n\t\t\t" . '<div class="thumb" style="height: ' .
					( $this->getThumbPadding() + $this->mHeights ) . 'px;">' .
					$linkRenderer->makeKnownLink( $nt, $nt->getText() ) .
					'</div>';
			} else {
				$thumb = $img->transform( $transformOptions );
				if ( !$thumb ) {
					# Error generating thumbnail.
					$thumbhtml = "\n\t\t\t" . '<div class="thumb" style="height: '
						. ( $this->getThumbPadding() + $this->mHeights ) . 'px;">'
						. htmlspecialchars( $img->getLastError() ) . '</div>';
				} else {
					/** @var MediaTransformOutput $thumb */
					$vpad = $this->getVPad( $this->mHeights, $thumb->getHeight() );

					$imageParameters = [
						'desc-link' => true,
						'desc-query' => $descQuery,
						'alt' => $alt,
						'custom-url-link' => $link
					];

					// In the absence of both alt text and caption, fall back on
					// providing screen readers with the filename as alt text
					if ( $alt == '' && $text == '' ) {
						$imageParameters['alt'] = $nt->getText();
					}

					if ( $loading === ImageGalleryBase::LOADING_LAZY ) {
						$imageParameters['loading'] = 'lazy';
					}

					$this->adjustImageParameters( $thumb, $imageParameters );

					Linker::processResponsiveImages( $img, $thumb, $transformOptions );

					switch ( $img->getMediaType() ) {
						case 'AUDIO':
							$rdfaType = 'mw:Audio';
							break;
						case 'VIDEO':
							$rdfaType = 'mw:Video';
							break;
						default:
							$rdfaType = 'mw:Image';
					}

					$thumbhtml = $thumb->toHtml( $imageParameters );

					if ( !$enableLegacyMediaDOM ) {
						$thumbhtml = Html::rawElement(
							'span', [ 'typeof' => $rdfaType ], $thumbhtml
						);
					}

					if ( $enableLegacyMediaDOM ) {
						$thumbhtml = Html::rawElement( 'div', [
							# Auto-margin centering for block-level elements. Needed
							# now that we have video handlers since they may emit block-
							# level elements as opposed to simple <img> tags. ref
							# http://css-discuss.incutio.com/?page=CenteringBlockElement
							'style' => "margin:{$vpad}px auto;",
						], $thumbhtml );
					}

					# Set both fixed width and min-height.
					$width = $this->getThumbDivWidth( $thumb->getWidth() );
					$height = $this->getThumbPadding() + $this->mHeights;
					$thumbhtml = "\n\t\t\t" . Html::rawElement( 'div', [
						'class' => 'thumb',
						'style' => "width: {$width}px;" .
							( !$enableLegacyMediaDOM && $this->mMode === 'traditional' ?
								" height: {$height}px;" : '' ),
					], $thumbhtml );

					// Call parser transform hook
					/** @var MediaHandler $handler */
					$handler = $img->getHandler();
					if ( $resolveFilesViaParser && $handler ) {
						$handler->parserTransformHook( $this->mParser, $img );
					}
				}
			}

			$meta = [];
			if ( $img ) {
				if ( $this->mShowDimensions ) {
					$meta[] = $img->getDimensionsString();
				}
				if ( $this->mShowBytes ) {
					$meta[] = htmlspecialchars( $lang->formatSize( $img->getSize() ) );
				}
			} elseif ( $this->mShowDimensions || $this->mShowBytes ) {
				$meta[] = $this->msg( 'filemissing' )->escaped();
			}
			$meta = $lang->semicolonList( $meta );
			if ( $meta ) {
				$meta .= "<br />\n";
			}

			$textlink = $this->mShowFilename ?
				$this->getCaptionHtml( $nt, $lang, $linkRenderer ) :
				'';

			$galleryText = $textlink . $text . $meta;
			$galleryText = $this->wrapGalleryText( $galleryText, $thumb );

			$gbWidth = $this->getGBWidth( $thumb ) . 'px';
			if ( $this->getGBWidthOverwrite( $thumb ) ) {
				$gbWidth = $this->getGBWidthOverwrite( $thumb );
			}
			# Weird double wrapping (the extra div inside the li) needed due to FF2 bug
			# Can be safely removed if FF2 falls completely out of existence
			$output .= "\n\t\t" . '<li class="gallerybox" style="width: '
				. $gbWidth . '">'
				. ( $enableLegacyMediaDOM ? '<div style="width: ' . $gbWidth . '">' : '' )
				. $thumbhtml
				. $galleryText
				. "\n\t\t"
				. ( $enableLegacyMediaDOM ? '</div>' : '' )
				. "</li>";
		}
		$output .= "\n</ul>";

		return $output;
	}

	/**
	 * @param Title $nt
	 * @param Language $lang
	 * @param LinkRenderer $linkRenderer
	 * @return string HTML
	 */
	protected function getCaptionHtml( Title $nt, Language $lang, LinkRenderer $linkRenderer ) {
		// Preloaded into LinkCache in toHTML
		return $linkRenderer->makeKnownLink(
			$nt,
			// @phan-suppress-next-line SecurityCheck-DoubleEscaped Triggered by Language::truncateForVisual
			is_int( $this->getCaptionLength() ) ?
				$lang->truncateForVisual( $nt->getText(), $this->getCaptionLength() ) :
				$nt->getText(),
			[
				'class' => 'galleryfilename' .
					( $this->getCaptionLength() === true ? ' galleryfilename-truncate' : '' )
			]
		) . "\n";
	}

	/**
	 * Add the wrapper html around the thumb's caption
	 *
	 * @param string $galleryText The caption
	 * @param MediaTransformOutput|bool $thumb The thumb this caption is for
	 *   or false for bad image.
	 * @return string
	 */
	protected function wrapGalleryText( $galleryText, $thumb ) {
		# ATTENTION: The newline after <div class="gallerytext"> is needed to
		# accommodate htmltidy which in version 4.8.6 generated crackpot html in
		# its absence, see: https://phabricator.wikimedia.org/T3765
		# -Ævar

		return "\n\t\t\t" . '<div class="gallerytext">' . "\n"
			. $galleryText
			. "\n\t\t\t</div>";
	}

	/**
	 * How much padding the thumb has between the image and the inner div
	 * that contains the border. This is for both vertical and horizontal
	 * padding. (However, it is cut in half in the vertical direction).
	 * @return int
	 */
	protected function getThumbPadding() {
		return 30;
	}

	/**
	 * @note GB stands for gallerybox (as in the <li class="gallerybox"> element)
	 *
	 * @return int
	 */
	protected function getGBPadding() {
		return 5;
	}

	/**
	 * Get how much extra space the borders around the image takes up.
	 *
	 * For this mode, it is 2px borders on each side + 2px implied padding on
	 * each side from the stylesheet, giving us 2*2+2*2 = 8.
	 * @return int
	 */
	protected function getGBBorders() {
		return 8;
	}

	/**
	 * Length (in characters) to truncate filename to in caption when using "showfilename" (if int).
	 * A value of 'true' will truncate the filename to one line using CSS, while
	 * 'false' will disable truncating.
	 *
	 * @return int|bool
	 */
	protected function getCaptionLength() {
		return $this->mCaptionLength;
	}

	/**
	 * Get total padding.
	 *
	 * @return int Number of pixels of whitespace surrounding the thumbnail.
	 */
	protected function getAllPadding() {
		return $this->getThumbPadding() + $this->getGBPadding() + $this->getGBBorders();
	}

	/**
	 * Get vertical padding for a thumbnail
	 *
	 * Generally this is the total height minus how high the thumb is.
	 *
	 * @param int $boxHeight How high we want the box to be.
	 * @param int $thumbHeight How high the thumbnail is.
	 * @return int Vertical padding to add on each side.
	 */
	protected function getVPad( $boxHeight, $thumbHeight ) {
		return ( $this->getThumbPadding() + $boxHeight - $thumbHeight ) / 2;
	}

	/**
	 * Get the transform parameters for a thumbnail.
	 *
	 * @param File $img The file in question. May be false for invalid image
	 * @return array
	 */
	protected function getThumbParams( $img ) {
		return [
			'width' => $this->mWidths,
			'height' => $this->mHeights
		];
	}

	/**
	 * Get the width of the inner div that contains the thumbnail in
	 * question. This is the div with the class of "thumb".
	 *
	 * @param int $thumbWidth The width of the thumbnail.
	 * @return int Width of inner thumb div.
	 */
	protected function getThumbDivWidth( $thumbWidth ) {
		return $this->mWidths + $this->getThumbPadding();
	}

	/**
	 * Computed width of gallerybox <li>.
	 *
	 * Generally is the width of the image, plus padding on image
	 * plus padding on gallerybox.
	 *
	 * @note Important: parameter will be false if no thumb used.
	 * @param MediaTransformOutput|bool $thumb MediaTransformObject object or false.
	 * @return int Width of gallerybox element
	 */
	protected function getGBWidth( $thumb ) {
		return $this->mWidths + $this->getThumbPadding() + $this->getGBPadding();
	}

	/**
	 * Allows overwriting the computed width of the gallerybox <li> with a string,
	 * like '100%'.
	 *
	 * Generally is the width of the image, plus padding on image
	 * plus padding on gallerybox.
	 *
	 * @note Important: parameter will be false if no thumb used.
	 * @param MediaTransformOutput|bool $thumb MediaTransformObject object or false.
	 * @return bool|string Ignored if false.
	 */
	protected function getGBWidthOverwrite( $thumb ) {
		return false;
	}

	/**
	 * Get a list of modules to include in the page.
	 *
	 * Primarily intended for subclasses.
	 *
	 * @return array Modules to include
	 */
	protected function getModules() {
		return [];
	}

	/**
	 * Adjust the image parameters for a thumbnail.
	 *
	 * Used by a subclass to insert extra high resolution images.
	 * @param MediaTransformOutput $thumb The thumbnail
	 * @param array &$imageParameters Array of options
	 */
	protected function adjustImageParameters( $thumb, &$imageParameters ) {
	}
}
