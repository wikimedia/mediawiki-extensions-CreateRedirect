<?php
/**
 * CreateRedirect - MediaWiki extension
 *
 * @file
 * @ingroup Extensions
 * @version 1.0
 * @author Marco Zafra ("Digi")
 *
 * Adds a special page that eases creation of redirects via a simple form.
 * Also adds a menu item to the sidebar as a shortcut.
 *
 * This program, CreateRedirect, is Copyright (C) 2007 Marco Zafra.
 * CreateRedirect is released under the GNU Lesser General Public License version 3.
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

// Alert the user that this is not a valid entry point to MediaWiki if they try
// to access the file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install the CreateRedirect extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/CreateRedirect/CreateRedirect.php" );
EOT;
	exit( 1 );
}

// Add this extension to Special:Credits.
$wgExtensionCredits['specialpage'][] = array(
	'name' => 'CreateRedirect',
	'author' => 'Marco Zafra',
	'version' => 1.0,
	'description' => 'Adds [[Special:CreateRedirect]] to easily create redirects.',
	'url' => 'http://www.mediawiki.org/wiki/Extension:CreateRedirect',
);

// Set up the actual extension functionality.
$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['SpecialCreateRedirect'] = $dir . 'CreateRedirect.body.php';
$wgSpecialPages['CreateRedirect'] = 'SpecialCreateRedirect';
$wgSpecialPageGroups['CreateRedirect'] = 'pagetools';
$wgExtensionMessagesFiles['CreateRedirect'] = $dir . 'CreateRedirect.i18n.php';
$wgExtensionAliasesFiles['CreateRedirect'] = $dir . 'CreateRedirect.alias.php';

// Add a shortcut link to the toolbox.
$wgHooks['SkinTemplateToolboxEnd'][] = 'createRedirect_addToolboxLink';

/**
 * Adds a shortcut link pointing to Special:CreateRedirect to the "toolbox" menu.
 * If applicable, also adds a reference to the current title as a GET param.
 *
 * @return Boolean: true
 */
function createRedirect_AddToolboxLink() {
	global $wgRequest, $wgTitle;

	// 1. Determine whether to actually add the link at all.
	// There are certain cases, e.g. in the edit dialog, in a special page,
	// where it's inappropriate for the link to appear.
	// 2. Check the title. Is it a "Special:" page? Don't display the link.
	$action = $wgRequest->getText( 'action', 'view' );
	if( $action != 'view' && $action != 'purge' && !$wgTitle->isSpecialPage() ) {
		return true;
	}

	// 4. Add the link!
	$href = SpecialPage::getTitleFor( 'CreateRedirect', $wgTitle->getPrefixedText() )->getLocalURL();
	echo Html::rawElement( 'li', null, Html::element( 'a', array( 'href' => $href ), wfMsg( 'createredirect' ) ) );

	return true;
}
