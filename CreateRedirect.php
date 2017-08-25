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

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'CreateRedirect' );
	$wgMessageDirs['CreateRedirect'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for CreateRedirect extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
} else {
	die( 'This version of the CreateRedirect extension requires MediaWiki 1.29+' );
}
