<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Revision\SlotRecord;

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
 * Adds a special page for creating redirects via a simple form.
 * Also adds a menu item to the sidebar as a shortcut.
 */

class SpecialCreateRedirect extends FormSpecialPage {
	/**
	 * @var int
	 * Number of edits made in onSubmit().
	 */
	protected $editCount = 0;

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'CreateRedirect' );
	}

	/**
	 * @inheritDoc
	 */
	public function onSubmit( array $data ) {
		$redirectTarget = Title::newFromText( $data['crRedirectTitle'] );
		if ( !$redirectTarget ) {
			return Status::newFatal( 'createredirect-invalid-title', $data['crRedirectTitle'] );
		}

		$origTitles = array_filter( array_map( static function ( $ele ) {
			return $ele[0] ?? null;
		}, $data['crOrigTitle'] ) );

		$status = Status::newGood();
		foreach ( $origTitles as $pageName ) {
			$this->createOneRedirect( $pageName, $status, $redirectTarget, $data['crOverwrite'] );
		}

		if ( !$this->editCount && $status->isGood() ) {
			// Empty multiline field. Show the form again.
			return false;
		}

		return $status;
	}

	/**
	 * Create redirect from page A to page B.
	 *
	 * @param string $pageName Title of original page. (we are making a redirect to this page)
	 * @param Status $status Status object for placing errors into it.
	 * @param Title $redirectTarget Title of redirect page.
	 * @param bool $overwrite Whether to allow overwriting the existing page with the new redirect.
	 */
	protected function createOneRedirect( $pageName, $status,
		Title $redirectTarget, bool $overwrite
	) {
		$crOrigTitle = Title::newFromText( $pageName );
		if ( !$crOrigTitle ) {
			$status->fatal( 'createredirect-invalid-title', $pageName );
			return;
		}

		if ( $crOrigTitle->exists() && !$overwrite ) {
			// Creating this redirect would result in overwriting an existing page.
			// Warn about that, but provide "create anyway" button.
			$status->fatal( 'createredirect-would-overwrite', $crOrigTitle->getFullText() );
			return;
		}

		$contentHandler = new WikitextContentHandler();
		$content = $contentHandler->makeRedirectContent( $redirectTarget );

		$pageUpdater = MediaWikiServices::getInstance()
			->getWikiPageFactory()
			->newFromTitle( $crOrigTitle )
			->newPageUpdater( $this->getUser() );
		$pageUpdater->setContent( SlotRecord::MAIN, $content );
		$pageUpdater->saveRevision(
			CommentStoreComment::newUnsavedComment( '' ),
			EDIT_INTERNAL | EDIT_MINOR | EDIT_AUTOSUMMARY
		);
		$saveStatus = $pageUpdater->getStatus();

		if ( $saveStatus->isOK() ) {
			$linkRenderer = $this->getLinkRenderer();
			$this->getOutput()->addHTML( Xml::tags( 'div', [ 'class' => 'mw-createredirect-done' ],
				$this->msg( 'createredirect-redirect-done' )->rawParams(
					$linkRenderer->makeKnownLink( $crOrigTitle, null, [], [ 'redirect' => 'no' ] ),
					$linkRenderer->makeKnownLink( $redirectTarget )
				)->escaped()
			) );
			$this->editCount ++;
		}

		$status->merge( $saveStatus );
	}

	/**
	 * @inheritDoc
	 */
	protected function preText() {
		return $this->msg( 'createredirect-instructions' )->escaped();
	}

	/**
	 * @inheritDoc
	 */
	protected function getFormFields() {
		$request = $this->getRequest();
		$crTitle = Title::newFromText( $request->getText( 'crRedirectTitle',
			$request->getText( 'crTitle', $this->par )
		) );

		$crRedirectTitleDefault = '';
		$crOrigTitleDefault = '';

		if ( $crTitle ) {
			$crRedirectTitleDefault = $crTitle->getPrefixedText();
			if ( $crTitle->getNamespace() != NS_MAIN ) {
				$crOrigTitleDefault = $crTitle->getNsText() . ':';
			}
		}

		return [
			'crOrigTitle' => [
				'type' => 'cloner',
				'name' => 'crOrigTitle',
				'id' => 'crOrigTitle',
				'cssclass' => 'createredirect-cloner',
				'fields' => [
					[
						'type' => 'title',
						'required' => false,
						'creatable' => true,
						'exists' => false,
					],
					// Disables delete button and hides using CSS. They are not needed for 99% users
					// (others can just leave the field empty, which is identical to using
					// "Remove").
					'delete' => [
						'type' => 'submit',
						'disabled' => true,
						'cssclass' => 'createredirect-delete',
					],
				],
				'label-message' => 'createredirect-page-title',
				'create-button-message' => 'createredirect-enable-multiline',
				'default' => [
					[ $crOrigTitleDefault ]
				],
				'required' => true
			],
			'crRedirectTitle' => [
				'type' => 'title',
				'name' => 'crRedirectTitle',
				'id' => 'crRedirectTitle',
				'size' => 60,
				'label-message' => 'createredirect-redirect-to',
				'default' => $crRedirectTitleDefault,
				'required' => true,
				'autocomplete' => false
			],
			'crOverwrite' => [
				'type' => 'check',
				'label-message' => 'createredirect-overwrite'
			]
		];
	}

	/**
	 * @inheritDoc
	 */
	protected function alterForm( HTMLForm $form ) {
		$form->setId( 'redirectform' )
			->setSubmitTextMsg( 'createredirect-save' )
			->setWrapperLegend( false );

			$this->getOutput()->addModuleStyles( 'ext.createredirect' );
	}

	/**
	 * @inheritDoc
	 */
	protected function getDisplayFormat() {
		return 'ooui';
	}

	/**
	 * @inheritDoc
	 */
	protected function getGroupName() {
		return 'pagetools';
	}
}
