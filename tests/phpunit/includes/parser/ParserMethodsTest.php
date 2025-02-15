<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Revision\MutableRevisionRecord;
use MediaWiki\Revision\RevisionStore;
use MediaWiki\Revision\SlotRecord;
use MediaWiki\User\UserIdentityValue;

/**
 * @group Database
 * @covers Parser
 * @covers BlockLevelPass
 */
class ParserMethodsTest extends MediaWikiLangTestCase {
	use MockTitleTrait;

	public static function providePreSaveTransform() {
		return [
			[ 'hello this is ~~~',
				"hello this is [[Special:Contributions/127.0.0.1|127.0.0.1]]",
			],
			[ 'hello \'\'this\'\' is <nowiki>~~~</nowiki>',
				'hello \'\'this\'\' is <nowiki>~~~</nowiki>',
			],
		];
	}

	/**
	 * @dataProvider providePreSaveTransform
	 */
	public function testPreSaveTransform( $text, $expected ) {
		$title = Title::newFromText( str_replace( '::', '__', __METHOD__ ) );
		$user = new User();
		$user->setName( "127.0.0.1" );
		$popts = ParserOptions::newFromUser( $user );
		$text = MediaWikiServices::getInstance()->getParser()
			->preSaveTransform( $text, $title, $user, $popts );

		$this->assertEquals( $expected, $text );
	}

	public static function provideStripOuterParagraph() {
		// This mimics the most common use case (stripping paragraphs generated by the parser).
		$message = new RawMessage( "Message text." );

		return [
			[
				"<p>Text.</p>",
				"Text.",
			],
			[
				"<p class='foo'>Text.</p>",
				"<p class='foo'>Text.</p>",
			],
			[
				"<p>Text.\n</p>\n",
				"Text.",
			],
			[
				"<p>Text.</p><p>More text.</p>",
				"<p>Text.</p><p>More text.</p>",
			],
			[
				$message->parse(),
				"Message text.",
			],
		];
	}

	/**
	 * @dataProvider provideStripOuterParagraph
	 */
	public function testStripOuterParagraph( $text, $expected ) {
		$this->assertEquals( $expected, Parser::stripOuterParagraph( $text ) );
	}

	public function testRecursiveParse() {
		$title = Title::newFromText( 'foo' );
		$parser = MediaWikiServices::getInstance()->getParser();
		$po = ParserOptions::newFromAnon();
		$parser->setHook( 'recursivecallparser', [ $this, 'helperParserFunc' ] );
		$this->expectException( MWException::class );
		$this->expectExceptionMessage(
			"Parser state cleared while parsing. Did you call Parser::parse recursively?"
		);
		$parser->parse( '<recursivecallparser>baz</recursivecallparser>', $title, $po );
	}

	public function helperParserFunc( $input, $args, $parser ) {
		$title = Title::newFromText( 'foo' );
		$po = ParserOptions::newFromAnon();
		$parser->parse( $input, $title, $po );
		return 'bar';
	}

	public function testCallParserFunction() {
		// Normal parses test passing PPNodes. Test passing an array.
		$title = Title::newFromText( str_replace( '::', '__', __METHOD__ ) );
		$parser = MediaWikiServices::getInstance()->getParser();
		$parser->startExternalParse(
			$title,
			ParserOptions::newFromAnon(),
			Parser::OT_HTML
		);
		$frame = $parser->getPreprocessor()->newFrame();
		$ret = $parser->callParserFunction( $frame, '#tag',
			[ 'pre', 'foo', 'style' => 'margin-left: 1.6em' ]
		);
		$ret['text'] = $parser->getStripState()->unstripBoth( $ret['text'] );
		$this->assertSame( [
			'found' => true,
			'text' => '<pre style="margin-left: 1.6em">foo</pre>',
		], $ret, 'callParserFunction works for {{#tag:pre|foo|style=margin-left: 1.6em}}' );
	}

	/**
	 * @covers Parser
	 * @covers ParserOutput::getSections
	 */
	public function testGetSections() {
		$title = Title::newFromText( str_replace( '::', '__', __METHOD__ ) );
		$out = MediaWikiServices::getInstance()->getParser()->parse(
			"==foo==\n<h2>bar</h2>\n==baz==\n",
			$title,
			ParserOptions::newFromAnon()
		);
		$this->assertSame( [
			[
				'toclevel' => 1,
				'level' => '2',
				'line' => 'foo',
				'number' => '1',
				'index' => '1',
				'fromtitle' => $title->getPrefixedDBkey(),
				'byteoffset' => 0,
				'anchor' => 'foo',
			],
			[
				'toclevel' => 1,
				'level' => '2',
				'line' => 'bar',
				'number' => '2',
				'index' => '',
				'fromtitle' => false,
				'byteoffset' => null,
				'anchor' => 'bar',
			],
			[
				'toclevel' => 1,
				'level' => '2',
				'line' => 'baz',
				'number' => '3',
				'index' => '2',
				'fromtitle' => $title->getPrefixedDBkey(),
				'byteoffset' => 21,
				'anchor' => 'baz',
			],
		], $out->getSections(), 'getSections() with proper value when <h2> is used' );
	}

	/**
	 * @dataProvider provideNormalizeLinkUrl
	 */
	public function testNormalizeLinkUrl( $explanation, $url, $expected ) {
		$this->assertEquals( $expected, Parser::normalizeLinkUrl( $url ), $explanation );
	}

	public static function provideNormalizeLinkUrl() {
		return [
			[
				'Escaping of unsafe characters',
				'http://example.org/foo bar?param[]="value"&param[]=valüe',
				'http://example.org/foo%20bar?param%5B%5D=%22value%22&param%5B%5D=val%C3%BCe',
			],
			[
				'Case normalization of percent-encoded characters',
				'http://example.org/%ab%cD%Ef%FF',
				'http://example.org/%AB%CD%EF%FF',
			],
			[
				'Unescaping of safe characters',
				'http://example.org/%3C%66%6f%6F%3E?%3C%66%6f%6F%3E#%3C%66%6f%6F%3E',
				'http://example.org/%3Cfoo%3E?%3Cfoo%3E#%3Cfoo%3E',
			],
			[
				'Context-sensitive replacement of sometimes-safe characters',
				'http://example.org/%23%2F%3F%26%3D%2B%3B?%23%2F%3F%26%3D%2B%3B#%23%2F%3F%26%3D%2B%3B',
				'http://example.org/%23%2F%3F&=+;?%23/?%26%3D%2B%3B#%23/?&=+;',
			],
			[
				'IPv6 links aren\'t escaped',
				'http://[::1]/foobar',
				'http://[::1]/foobar',
			],
			[
				'non-IPv6 links aren\'t unescaped',
				'http://%5B::1%5D/foobar',
				'http://%5B::1%5D/foobar',
			],
		];
	}

	public function testWrapOutput() {
		$title = Title::newFromText( 'foo' );
		$po = ParserOptions::newFromAnon();
		$parser = MediaWikiServices::getInstance()->getParser();
		$parser->parse( 'Hello World', $title, $po );
		$text = $parser->getOutput()->getText();

		$this->assertStringContainsString( 'Hello World', $text );
		$this->assertStringContainsString( '<div', $text );
		$this->assertStringContainsString( 'class="mw-parser-output"', $text );
	}

	public function provideRevisionAccess() {
		$title = $this->makeMockTitle( 'ParserRevisionAccessTest', [
			'language' => MediaWikiServices::getInstance()->getLanguageFactory()->getLanguage( 'en' )
		] );

		$frank = new UserIdentityValue( 5, 'Frank' );

		$text = '* user:{{REVISIONUSER}};id:{{REVISIONID}};time:{{REVISIONTIMESTAMP}};';
		$po = new ParserOptions( $frank );

		yield 'current' => [ $text, $po, 0, 'user:CurrentAuthor;id:200;time:20160606000000;' ];
		yield 'anonymous' => [ $text, $po, null, 'user:;id:;time:' ];
		yield 'current with ID' => [ $text, $po, 200, 'user:CurrentAuthor;id:200;time:20160606000000;' ];

		$text = '* user:{{REVISIONUSER}};id:{{REVISIONID}};time:{{REVISIONTIMESTAMP}};';
		$po = new ParserOptions( $frank );

		yield 'old' => [ $text, $po, 100, 'user:OldAuthor;id:100;time:20140404000000;' ];

		$oldRevision = new MutableRevisionRecord( $title );
		$oldRevision->setId( 100 );
		$oldRevision->setUser( new UserIdentityValue( 7, 'FauxAuthor' ) );
		$oldRevision->setTimestamp( '20141111111111' );
		$oldRevision->setContent( SlotRecord::MAIN, new WikitextContent( 'FAUX' ) );

		$po = new ParserOptions( $frank );
		$po->setCurrentRevisionRecordCallback( static function () use ( $oldRevision ) {
			return $oldRevision;
		} );

		yield 'old with override' => [ $text, $po, 100, 'user:FauxAuthor;id:100;time:20141111111111;' ];

		$text = '* user:{{REVISIONUSER}};user-subst:{{subst:REVISIONUSER}};';

		$po = new ParserOptions( $frank );
		$po->setIsPreview( true );

		yield 'preview without override, using context' => [
			$text,
			$po,
			null,
			'user:Frank;',
			'user-subst:Frank;',
		];

		$text = '* user:{{REVISIONUSER}};time:{{REVISIONTIMESTAMP}};'
			. 'user-subst:{{subst:REVISIONUSER}};time-subst:{{subst:REVISIONTIMESTAMP}};';

		$newRevision = new MutableRevisionRecord( $title );
		$newRevision->setUser( new UserIdentityValue( 9, 'NewAuthor' ) );
		$newRevision->setTimestamp( '20180808000000' );
		$newRevision->setContent( SlotRecord::MAIN, new WikitextContent( 'NEW' ) );

		$po = new ParserOptions( $frank );
		$po->setIsPreview( true );
		$po->setCurrentRevisionRecordCallback( static function () use ( $newRevision ) {
			return $newRevision;
		} );

		yield 'preview' => [
			$text,
			$po,
			null,
			'user:NewAuthor;time:20180808000000;',
			'user-subst:NewAuthor;time-subst:20180808000000;',
		];

		$po = new ParserOptions( $frank );
		$po->setCurrentRevisionRecordCallback( static function () use ( $newRevision ) {
			return $newRevision;
		} );

		yield 'pre-save' => [
			$text,
			$po,
			null,
			'user:NewAuthor;time:20180808000000;',
			'user-subst:NewAuthor;time-subst:20180808000000;',
		];

		$text = "(ONE)<includeonly>(TWO)</includeonly>"
			. "<noinclude>#{{:ParserRevisionAccessTest}}#</noinclude>";

		$newRevision = new MutableRevisionRecord( $title );
		$newRevision->setUser( new UserIdentityValue( 9, 'NewAuthor' ) );
		$newRevision->setTimestamp( '20180808000000' );
		$newRevision->setContent( SlotRecord::MAIN, new WikitextContent( $text ) );

		$po = new ParserOptions( $frank );
		$po->setIsPreview( true );
		$po->setCurrentRevisionRecordCallback( static function () use ( $newRevision ) {
			return $newRevision;
		} );

		yield 'preview with self-transclude' => [ $text, $po, null, '(ONE)#(ONE)(TWO)#' ];
	}

	/**
	 * @dataProvider provideRevisionAccess
	 */
	public function testRevisionAccess(
		$text,
		ParserOptions $po,
		$revId,
		$expectedInHtml,
		$expectedInPst = null
	) {
		$title = $this->makeMockTitle( 'ParserRevisionAccessTest', [
			'language' => MediaWikiServices::getInstance()->getLanguageFactory()->getLanguage( 'en' )
		] );

		$oldRevision = new MutableRevisionRecord( $title );
		$oldRevision->setId( 100 );
		$oldRevision->setUser( new UserIdentityValue( 7, 'OldAuthor' ) );
		$oldRevision->setTimestamp( '20140404000000' );
		$oldRevision->setContent( SlotRecord::MAIN, new WikitextContent( 'OLD' ) );

		$currentRevision = new MutableRevisionRecord( $title );
		$currentRevision->setId( 200 );
		$currentRevision->setUser( new UserIdentityValue( 9, 'CurrentAuthor' ) );
		$currentRevision->setTimestamp( '20160606000000' );
		$currentRevision->setContent( SlotRecord::MAIN, new WikitextContent( 'CURRENT' ) );

		$revisionStore = $this->getMockBuilder( RevisionStore::class )
			->disableOriginalConstructor()
			->getMock();

		$revisionStore
			->method( 'getKnownCurrentRevision' )
			->willReturnMap( [
				[ $title, 100, $oldRevision ],
				[ $title, 200, $currentRevision ],
				[ $title, 0, $currentRevision ],
			] );

		$revisionStore
			->method( 'getRevisionById' )
			->willReturnMap( [
				[ 100, 0, null, $oldRevision ],
				[ 200, 0, null, $currentRevision ],
			] );

		$this->setService( 'RevisionStore', $revisionStore );

		$parser = MediaWikiServices::getInstance()->getParser();
		$parser->parse( $text, $title, $po, true, true, $revId );
		$html = $parser->getOutput()->getText();

		$this->assertStringContainsString( $expectedInHtml, $html, 'In HTML' );

		if ( $expectedInPst !== null ) {
			$pst = $parser->preSaveTransform( $text, $title, $po->getUserIdentity(), $po );
			$this->assertStringContainsString( $expectedInPst, $pst, 'After Pre-Safe Transform' );
		}
	}

	public static function provideGuessSectionNameFromWikiText() {
		return [
			[ '1/2', 'html5', '#1/2' ],
			[ '1/2', 'legacy', '#1.2F2' ],
		];
	}

	/** @dataProvider provideGuessSectionNameFromWikiText */
	public function testGuessSectionNameFromWikiText( $input, $mode, $expected ) {
		$this->setMwGlobals( [ 'wgFragmentMode' => [ $mode ] ] );
		$result = MediaWikiServices::getInstance()->getParser()
			->guessSectionNameFromWikiText( $input );
		$this->assertEquals( $result, $expected );
	}

	// @todo Add tests for cleanSig() / cleanSigInSig(), getSection(),
	// replaceSection(), getPreloadText()
}
