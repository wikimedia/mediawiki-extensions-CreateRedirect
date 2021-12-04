<?php

use MediaWiki\Hook\SidebarBeforeOutputHook;

class CreateRedirectHooks implements SidebarBeforeOutputHook {
	/**
	 * Adds a shortcut link pointing to Special:CreateRedirect to the "toolbox" menu.
	 * If applicable, also adds a reference to the current title as a GET param.
	 *
	 * @inheritDoc
	 */
	public function onSidebarBeforeOutput( $skin, &$sidebar ): void {
		// 1. Determine whether to actually add the link at all.
		// There are certain cases, e.g. in the edit dialog, in a special page,
		// where it's inappropriate for the link to appear.
		// 2. Check the title. Is it a "Special:" page? Don't display the link.
		$action = $skin->getRequest()->getText( 'action', 'view' );
		$title = $skin->getTitle();

		if ( $action != 'view' && $action != 'purge' && !$title->isSpecialPage() ) {
			return;
		}

		// 3. Add the link!
		$href = SpecialPage::getTitleFor( 'CreateRedirect', $title->getPrefixedText() )->getLocalURL();
		$sidebar['TOOLBOX']['createredirect'] = [
			'id' => 't-createredirect',
			'href' => $href
		];
	}
}
