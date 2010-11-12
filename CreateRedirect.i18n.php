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
 * This file is part of CreateRedirect. See the main file ("CreateRedirect.setup.php") for additional information.
 *
 * CreateRedirect is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

/* i18n (Internationalization) file:
 * Contains messages that are translated in multiple languages.
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the file directly.
if (!defined('MEDIAWIKI')) {
        echo <<<EOT
To install the CreateRedirect extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/CreateRedirect/CreateRedirect.setup.php" );
EOT;
        exit( 1 );
}

$allMessages = array(
        'en' => array( 
                "createredirect" => "Create redirect",
				"crmsgform" => "Using the form below, you can create a redirect page or replace an existing page with a redirect.",
				"crorigtitle" => "Page title:",
				"crredirecttitle" => "Redirect to:",
				"crerror" => "ERROR: Authentication failed." // TODO: Figure out error cases. One message just is not going to do. --Digi 11/5/07
        )
);
