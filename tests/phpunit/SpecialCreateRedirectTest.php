<?php

/**
 * Extension:CreateRedirect - MediaWiki extension.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

/**
 * @file
 * Integration test of Special:CreateRedirect.
 */

use MediaWiki\MediaWikiServices;

/**
 * @covers SpecialCreateRedirect
 * @group Database
 */
class SpecialCreateRedirectTest extends SpecialPageTestBase {
	/** @var string[] */
	protected $tablesUsed = [ 'page', 'objectcache' ];

	protected function newSpecialPage() {
		return MediaWikiServices::getInstance()->getSpecialPageFactory()->getPage( 'CreateRedirect' );
	}

	public function needsDB() {
		return true;
	}

	/**
	 * Checks the form when Special:CreateRedirect is opened.
	 * @covers SpecialCreateRedirect::getFormFields
	 * @covers SpecialCreateRedirect::alterForm
	 */
	public function testForm() {
		list( $html, ) = $this->runSpecial();

		$dom = new DomDocument;
		$dom->loadHTML( $html );

		$xpath = new DomXpath( $dom );
		$form = $xpath->query( '//form[contains(@action,"Special:CreateRedirect")]' )
			->item( 0 );

		$this->assertNotNull( $form, 'Special:CreateRedirect: <form> element not found' );

		$inputFrom = $xpath->query( '//input[@name="crOrigTitle[0][0]"]', $form )->item( 0 );
		$this->assertNotNull( $inputFrom,
			'Special:CreateRedirect: <input name="crOrigTitle[0][0]"/> not found' );

		$inputTo = $xpath->query( '//input[@name="crRedirectTitle"]', $form )->item( 0 );
		$this->assertNotNull( $inputTo,
			'Special:CreateRedirect: <input name="crRedirectTitle"/> not found' );

		$label = $xpath->query(
			'//label[@for="' . $inputTo->getAttribute( 'id' ) . '"]', $form
		)->item( 0 );
		$this->assertNotNull( $label,
			'Special:CreateRedirect: <label for="crOrigTitle[0][0]"> not found' );
		$this->assertEquals( '(createredirect-redirect-to)', $label->textContent );

		$submit = $xpath->query( '//*[@type="submit"]', $form )->item( 0 );
		$this->assertNotNull( $submit, 'Special:CreateRedirect: Submit button not found' );
	}

	/**
	 * Checks the form when Special:CreateRedirect is supplied with "redirect to this" title.
	 * @param string $expectedInputFrom Expected default value of "Page title:" field.
	 * @param string $expectedInputTo Expected default value of "Redirect to:" field.
	 * @param array $query This parameter is passed to runSpecial().
	 * @param string $subpage This parameter is passed to runSpecial().
	 * @covers SpecialCreateRedirect::getFormFields
	 * @dataProvider defaultTitleDataProvider
	 */
	public function testFormWithDefaultTitle( $expectedInputFrom, $expectedInputTo,
		array $query, $subpage = ''
	) {
		list( $html, ) = $this->runSpecial( $query, false, $subpage );

		$dom = new DomDocument;
		$dom->loadHTML( $html );

		$xpath = new DomXpath( $dom );
		$form = $xpath->query( '//form[contains(@action,"Special:CreateRedirect")]' )
			->item( 0 );

		$inputFrom = $xpath->query( '//input[@name="crOrigTitle[0][0]"]', $form )->item( 0 );
		$inputTo = $xpath->query( '//input[@name="crRedirectTitle"]', $form )->item( 0 );

		$this->assertSame( $expectedInputFrom, $inputFrom->getAttribute( 'value' ) );
		$this->assertSame( $expectedInputTo, $inputTo->getAttribute( 'value' ) );
	}

	/**
	 * Data provider for testFormWithDefaultTitle().
	 */
	public function defaultTitleDataProvider() {
		yield "no title provided" => [ '', '', [] ];

		yield "title provided via ?crRedirectTitle=something" =>
			[ '', 'Page in normal namespace', [ 'crRedirectTitle' => 'Page in normal namespace' ] ];

		yield "title provided via ?crTitle=something" =>
			[ '', 'Another page', [ 'crTitle' => 'Another page' ] ];

		yield "title provided via Special:CreateRedirect/something" =>
			[ '', 'Third title provided via subpage', [], 'Third title provided via subpage' ];

		yield "title in Template namespace" =>
			[ 'Template:', 'Template:Infobox', [ 'crRedirectTitle' => 'Template:Infobox' ] ];

		yield "title in Help namespace" =>
			[ 'Help:', 'Help:Using wikitext', [], 'Help:Using wikitext' ];

		yield "title with prefix that is not a prefix of any existing namespace" =>
			[ '', 'NoSuchNamespace:Page name', [], 'NoSuchNamespace:Page name' ];
	}

	/**
	 * Checks situation when 1 new redirect is created by submitting Special:CreateRedirect.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testSubmitOne() {
		$pageNameFrom = 'Name of newly created redirect page';
		$pageNameTo = 'Name of article to where the redirect will be pointing';

		[ $doneMessages, $warnMessages ] = $this->runSubmitTest( [
			'crOrigTitle' => [ [ $pageNameFrom ] ],
			'crRedirectTitle' => $pageNameTo
		] );
		$this->assertSame(
			[ "(createredirect-redirect-done: $pageNameFrom, $pageNameTo)" ],
			$doneMessages,
			'Special:CreateRedirect: \"Redirect created\" message not found'
		);
		$this->assertSame( [], $warnMessages, 'Special:CreateRedirect: Unexpected warnings' );

		// Verify that redirect page ($pageNameFrom) has indeed been created.
		$this->assertPagesAreRedirectsTo( [ $pageNameFrom ], $pageNameTo );
	}

	/**
	 * Checks situation when redirect wasn't created, because page with this name already exists.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testSubmitOneAlreadyExists() {
		$pageNameFrom = 'Name of newly created redirect page';
		$pageNameTo = 'Name of article to where the redirect will be pointing';

		$this->insertPage( $pageNameFrom, 'Some existing content' );

		[ $doneMessages, $warnMessages ] = $this->runSubmitTest( [
			'crOrigTitle' => [ [ $pageNameFrom ] ],
			'crRedirectTitle' => $pageNameTo
		] );
		$this->assertSame(
			[ "(createredirect-would-overwrite: $pageNameFrom)" ],
			$warnMessages,
			'Special:CreateRedirect: Warning \"page already exists\" not found'
		);
		$this->assertSame( [], $doneMessages, 'Special:CreateRedirect: Unexpected success messages' );

		// Verify that page wasn't overwritten.
		$this->assertFalse(
			Title::newFromText( $pageNameTo )->isRedirect(),
			'Special:CreateRedirect: Existing page was overwritten when it should\'t have been.'
		);
	}

	/**
	 * Checks situation when created redirect ovewrites an existing page (with user's permission).
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testSubmitOneOverwrite() {
		$pageNameFrom = 'Name of newly created redirect page';
		$pageNameTo = 'Name of article to where the redirect will be pointing';

		$this->insertPage( $pageNameFrom, 'Some existing content' );

		[ $doneMessages, $warnMessages ] = $this->runSubmitTest( [
			'crOrigTitle' => [ [ $pageNameFrom ] ],
			'crRedirectTitle' => $pageNameTo,
			'wpcrOverwrite' => '1'
		] );
		$this->assertSame(
			[ "(createredirect-redirect-done: $pageNameFrom, $pageNameTo)" ],
			$doneMessages,
			'Special:CreateRedirect: \"Redirect created\" message not found'
		);
		$this->assertSame( [], $warnMessages, 'Special:CreateRedirect: Unexpected warnings' );

		// Verify that redirect page ($pageNameFrom) has indeed been created.
		$this->assertPagesAreRedirectsTo( [ $pageNameFrom ], $pageNameTo );
	}

	/**
	 * Checks situation when several new redirects are created by submitting Special:CreateRedirect.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testSubmitMany() {
		$pageNameTo = 'Name of article to where the redirect will be pointing';

		[ $doneMessages, $warnMessages ] = $this->runSubmitTest( [
			'crOrigTitle' => [
				[ 'New redirect A' ],
				[ 'New redirect B' ],
				[ 'New redirect C' ],
			],
			'crRedirectTitle' => $pageNameTo
		] );
		$this->assertSame(
			[
				"(createredirect-redirect-done: New redirect A, $pageNameTo)",
				"(createredirect-redirect-done: New redirect B, $pageNameTo)",
				"(createredirect-redirect-done: New redirect C, $pageNameTo)"
			],
			$doneMessages,
			'Special:CreateRedirect: \"Redirect created\" message not found'
		);
		$this->assertSame( [], $warnMessages, 'Special:CreateRedirect: Unexpected warnings' );

		// Verify that redirect page ($pageNameFrom) has indeed been created.
		$this->assertPagesAreRedirectsTo( [
			'New redirect A',
			'New redirect B',
			'New redirect C'
		], $pageNameTo );
	}

	/**
	 * Checks situation when some redirects were successfully created and some weren't.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testSubmitManySomeExist() {
		$pageNameTo = 'Name of article to where the redirect will be pointing';

		// Precreate some pages, so that CreateRedirect would produce a warning
		// when trying to create redirects with these titles,
		// but all other redirects would be created successfully.
		$this->insertPage( 'New redirect B', 'Some existing content' );
		$this->insertPage( 'New redirect C', 'Another existing content' );

		[ $doneMessages, $warnMessages ] = $this->runSubmitTest( [
			'crOrigTitle' => [
				[ 'New redirect A' ],
				[ 'New redirect B' ],
				[ 'New redirect C' ],
				[ 'New redirect D' ],
				[ 'New redirect E' ],
			],
			'crRedirectTitle' => $pageNameTo
		] );

		$this->assertSame(
			[
				"(createredirect-redirect-done: New redirect A, $pageNameTo)",
				"(createredirect-redirect-done: New redirect D, $pageNameTo)",
				"(createredirect-redirect-done: New redirect E, $pageNameTo)"
			],
			$doneMessages,
			'Special:CreateRedirect: \"Redirect created\" message not found'
		);
		$this->assertSame(
			[
				'(createredirect-would-overwrite: New redirect B)',
				'(createredirect-would-overwrite: New redirect C)'
			],
			$warnMessages,
			'Special:CreateRedirect: Warning \"page already exists\" not found'
		);

		// Verify that redirect page ($pageNameFrom) has indeed been created.
		$this->assertPagesAreRedirectsTo( [
			'New redirect A',
			'New redirect D',
			'New redirect E'
		], $pageNameTo );
	}

	/**
	 * Verify that Special:CreateRedirect can't be used if user doesn't have "edit" right.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testPermissionErrorNoEditRight() {
		$this->setGroupPermissions( '*', 'edit', false );
		$this->expectException( PermissionsError::class );

		$this->runSpecial( [
			'crOrigTitle' => [ [ 'Name of redirect page' ] ],
			'crRedirectTitle' => 'Target of redirect'
		], true );
	}

	/**
	 * Verify that Special:CreateRedirect won't create pages if user doesn't have "createpage" right.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testPermissionErrorNoCreatePageRight() {
		$this->setGroupPermissions( '*', 'createpage', false );
		$this->expectException( PermissionsError::class );

		$this->runSpecial( [
			'crOrigTitle' => [ [ 'Name of redirect page' ] ],
			'crRedirectTitle' => 'Target of redirect'
		], true );
	}

	/**
	 * Verify that Special:CreateRedirect won't create pages in Talk namespace if user doesn't
	 * have "createtalk" right.
	 * @covers SpecialCreateRedirect::onSubmit
	 */
	public function testPermissionErrorNoCreateTalkRight() {
		$this->setGroupPermissions( '*', 'createtalk', false );
		$this->expectException( PermissionsError::class );

		$this->runSpecial( [
			'crOrigTitle' => [ [ 'Talk:Name of redirect page' ] ],
			'crRedirectTitle' =>  'Target of redirect'
		], true );
	}

	/**
	 * Submit Special:CreateRedirect and return "Redirect created" success messages.
	 * @param array $query Query string parameter.
	 * @return array 1) all "Redirect created" success messages, 2) all warning messages.
	 * @phan-return array{0:string[], 1:string[]}
	 */
	private function runSubmitTest( array $query ) {
		$query['wpEditToken'] = RequestContext::getMain()->getCsrfTokenSet()->getToken();

		list( $html ) = $this->runSpecial( $query,  true );

		$dom = new DomDocument;
		$dom->loadHTML( $html );

		$xpath = new DomXpath( $dom );

		$doneMessageElements = $xpath->query( '//*[@class="mw-createredirect-done"]' );
		$doneMessages = [];
		foreach ( $doneMessageElements as $elem ) {
			$doneMessages[] = $elem->textContent;
		}

		$warnMessageElements = $xpath->query( '//*[@role="alert"]' );
		$warnMessages = [];
		foreach ( $warnMessageElements as $elem ) {
			$warnMessages[] = $elem->textContent;
		}

		return [ $doneMessages, $warnMessages ];
	}

	/**
	 * Throw an exception if articles $pageNames are NOT a redirect to $destinationPageName.
	 * @param string[] $pageNames
	 * @param string $destinationPageName
	 */
	private function assertPagesAreRedirectsTo( array $pageNames, $destinationPageName ) {
		$redirectLookup = $this->getServiceContainer()->getRedirectLookup();
		$destinationPageName = strtr( $destinationPageName, '_', ' ' );

		foreach ( $pageNames as $pageNameFrom ) {
			$target = $redirectLookup->getRedirectTarget( Title::newFromText( $pageNameFrom ) );
			$this->assertNotNull( $target, 'Newly created page is not a redirect.' );
			$this->assertSame( $destinationPageName, $target->getFullText(),
				'Newly created redirect points to the wrong page.' );
		}
	}

	/**
	 * Render Special:CreateRedirect.
	 * @param array $query Query string parameter.
	 * @param bool $isPosted true for POST request, false for GET request.
	 * @param string $subpage
	 * @return array
	 */
	protected function runSpecial( array $query = [], $isPosted = false, $subpage = '' ) {
		// HTMLForm sometimes calls wfMessage() without context, so we must set $wgLang
		global $wgLang;
		$wgLang = Language::factory( 'qqx' );

		return $this->executeSpecialPage(
			$subpage,
			new FauxRequest( $query, $isPosted ),
			$wgLang
		);
	}

	protected function tearDown(): void {
		Title::clearCaches();
		parent::tearDown();
	}
}
