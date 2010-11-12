<?php

/*
 * MediaWiki Extension
 * CreateRedirect
 * By Marco Zafra ("Digi")
 * Started: September 18, 2007
 *
 * Adds a special page that eases creation of redirects via a simple form. Also adds a menu item to the sidebar as a shortcut.
 *
 * This program, CreateRedirect, is Copyright (C) 2007 Marco Zafra. CreateRedirect is released under the GNU Lesser General Public License version 3.
 *
 * This file is part of CreateRedirect.
 *
 * CreateRedirect is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * CreateRedirect is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with CreateRedirect.  If not, see <http://www.gnu.org/licenses/>.
 */

/* Setup file:
 * Performs setup routines to hook the extension up to MediaWiki.
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the file directly.
if (!defined('MEDIAWIKI')) {
        echo <<<EOT
To install the CreateRedirect extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/CreateRedirect/CreateRedirect.php" );
EOT;
        exit( 1 );
}

# Add this extension to Special:Credits.
$wgExtensionCredits['specialpage'][] = array(
   'name' => 'CreateRedirect',
   'author' => 'Digiku',
   'version' => 1.0,
   'description' => 'Adds [[Special:CreateRedirect]] to easily create redirects.'
);

# Set up the actual extension functionality.
$wgAutoloadClasses['SpecialCreateRedirect'] = dirname(__FILE__) . '/CreateRedirect.body.php'; # Tell MediaWiki to load the extension body.
$wgSpecialPages['CreateRedirect'] = 'SpecialCreateRedirect'; # Let MediaWiki know about your new special page.
$wgSpecialPageGroups['CreateRedirect'] = 'pagetools';
$wgExtensionMessagesFiles['CreateRedirect'] = dirname(__FILE__) . '/CreateRedirect.i18n.php';
$wgExtensionAliasesFiles['CreateRedirect'] = dirname(__FILE__) . '/CreateRedirect.alias.php';

# Other hooks.
$wgHooks['SkinTemplateToolboxEnd'][] = 'createRedirect_addToolboxLink'; # Add a shortcut link to the sidebar menu in Monobook; specifically the toolbox.

/*
 * createRedirect_AddToolboxLink(): Adds to the "toolbox" menu in the Monobook skin a shortcut link pointing to Special:Createredirect. If applicable, also adds a reference to the current title as a GET param.
 * Params: None
 * Returns: true
 */
function createRedirect_AddToolboxLink() {
	global $wgRequest, $wgOut, $wgScript, $wgTitle;
	
	// 1. Determine whether to actually add the link at all. There are certain cases, e.g. in the edit dialog, in a special page, where it's inappropriate for the link to appear.
	// 2. Check the title. Is it a "Special:" page? Don't display the link.
	$action = $wgRequest->getText("action", "view");
	if( $action != "view" && $action != "purge" && !$wgTitle->isSpecialPage() )
		return true;
	
	// 4. Add the link!
	$href = SpecialPage::getTitleFor('CreateRedirect', $wgTitle->getPrefixedText())->getLocalURL();
	echo Html::rawElement( 'li', null, Html::element( 'a', array( 'href' => $href ), wfMsg('createredirect') ) );
	
	return true;
}
