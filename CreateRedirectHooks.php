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
 * Adds a menu item to the sidebar as a shortcut.
 */

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
