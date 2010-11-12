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

/* Body file:
 * The bulk of the routines are stored here. This is where all the internal processing actually occurs.
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the file directly.
if (!defined('MEDIAWIKI')) {
        echo <<<EOT
To install the CreateRedirect extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/CreateRedirect/CreateRedirect.setup.php" );
EOT;
        exit( 1 );
}

class CreateRedirect extends SpecialPage
{
	function CreateRedirect() {
		SpecialPage::SpecialPage("Createredirect", "", true);
		self::loadMessages();
		
		$title_text = wfMsg('cr_title');
	}
	
	function loadMessages() {
		static $messagesLoaded = false;
		global $wgMessageCache;
		if ( $messagesLoaded ) return;
		$messagesLoaded = true;
		
		require_once( dirname( __FILE__ ) . '/CreateRedirect.i18n.php' );
		foreach ( $allMessages as $lang => $langMessages ) {
			$wgMessageCache->addMessages( $langMessages, $lang );
		}
		return true;
	}
	
	function execute( $par ) {
		global $wgRequest, $wgOut, $wgTitle, $wgUser;
		
		// 1. Do some prep stuff. We call $this->setHeaders() (a method of SpecialPage) for the page, and we also initialize $output, which will hold the text output to serve with the page.
		$this->setHeaders();
		$output = "";
		
		// 2. Break from here: "crWrite" determines whether we're serving the form or we're performing the write routine. We send it along with the form on submission, so if we see a POST var "crWrite", then we've got form data to process; if it's not there, then we don't have form data to process, and we have to serve the form.
		if(!$wgRequest->getVal('crWrite')) { // Serve the form!
			// 1. Get the local URL for the "action" param, used by <form>. This points the form back to this page (again), where if crWrite exists (which it does,) we process the submitted form.
			$action = $wgTitle->escapeLocalURL();
			$crTitle = $wgRequest->getText("crTitle"); // Also retrieve "crTitle". If this GET var is found, we autofill the "Redirect to:" field with that text.
			
			// 2. Start rendering the output! The output is entirely the form. It's all HTML, and may be self-explanatory.
			$output .= "<p>Using the form below, you can create a redirect page or replace an existing page with a redirect.</p>";
			$output .= <<<END
<form id="redirectform" name="redirectform" method="post" action="$action" enctype="multipart/form-data">
<table>
<tr>
<td><label for="crOrigTitle">Page title:</label></td>
<td><input type="text" name="crOrigTitle" id="crOrigTitle" size="60" tabindex="1" /></td>
</tr>
<tr>
<td><label for="crRedirectTitle">Redirect to:</label></td>
<td><input type="text" name="crRedirectTitle" id="crRedirectTitle" value="{$crTitle}" size="60" tabindex="2" /></td>
</tr>
<tr>
<td />
<td><input type="submit" name="crWrite" id="crWrite" value="Save page" tabindex="4" /></td>
</tr>
</table>
</form>
END;
			$output .= <<<END
<script language="javascript">
//<![CDATA[
document.redirectform.crOrigTitle.focus();
//]]>
</script>
END;
		} else { // Process submitted form data!
			// 1. Retrieve POST vars. First, we want "crOrigTitle", holding the title of the page we're writing to, and "crRedirectTitle", holding the title of the page we're redirecting to.
			$crOrigTitle = $wgRequest->getText("crOrigTitle");
			$crRedirectTitle = $wgRequest->getText("crRedirectTitle");
			
			// 2. We need to construct a "FauxRequest", or fake a request that MediaWiki would otherwise get naturally by a client browser to do whatever it has to do. Let's put together the params.
			$title = $crOrigTitle;
			// a. We know our title, so we can instantiate a "Title" and "Article" object. We don't actually plug this into the FauxRequest, but they're required for the writing process, and they contain important information on the article in question that's being edited.
			$crEditTitle = Title::newFromText($crOrigTitle); // First, construct "Title". "Article" relies on the former object being set.
			$crEditArticle = new Article($crEditTitle, 0); // Then, construct "Article". This is where most of the article's information is.
			$wpStarttime = wfTimestampNow(); // POST var "wpStarttime" stores when the edit was started.
			$wpEdittime = $crEditArticle->getTimestamp(); // POST var "wpEdittime" stores when the article was ''last edited''. This is used to check against edit conflicts, and also why we needed to construct "Article" so early. "Article" contains the article's last edittime.
			$wpTextbox1 = "#REDIRECT[[$crRedirectTitle]]"."\r\n"; // POST var "wpTextbox1" stores the content that's actually going to be written. This is where we write the #REDIRECT[[Article]] stuff. We plug in $crRedirectTitle here.
			$wpSave = 1;
			$wpMinoredit = 1; // TODO: Decide on this; should this really be marked and hardcoded as a minor edit, or not? Or should we provide an option? --Digi 11/4/07
			$wpEditToken = htmlspecialchars($wgUser->editToken());
			
			// 3. Put together the params that we'll use in "FauxRequest" into a single array.
			$crRequestParams = array(
				'title' => $title,
				'wpStarttime' => $wpStarttime,
				'wpEdittime' => $wpEdittime,
				'wpTextbox1' => $wpTextbox1,
				'wpSave' => $wpSave,
				'wpMinoredit' => $wpMinoredit,
				'wpEditToken' => $wpEditToken
			);
			
			// 4. Construct "FauxRequest"! Using a FauxRequest object allows for a transparent interface of generated request params that aren't retrieved from the client itself (i.e. $_REQUEST). It's a very useful tool.
			$crRequest = new FauxRequest($crRequestParams, true);
			
			// 5. Construct "EditPage", which contains routines to write all the data. This is where all the magic happens.
			$crEdit = new EditPage($crEditArticle); // We plug in the "Article" object here so EditPage can center on the article that we need to edit.
			// a. We have to plug in the correct information that we just generated. While we fed EditPage with the correct "Article" object, it doesn't have the correct "Title" object. The "Title" object actually points to Special:Createredirect, which don't do us any good. Instead, explicitly plug in the correct objects; the objects "Article" and "Title" that we generated earlier. This will center EditPage on the correct article.
			$crEdit->mArticle = $crEditArticle;
			$crEdit->mTitle = $crEditTitle;
			// b. Then import the "form data" (or the FauxRequest object that we just constructed). EditPage now has all the information we generated.
			$crEdit->importFormData($crRequest);
			
			// 6. Write the data!

			if($this->checkUserPermissions($crEdit)) { // WORKAROUND: Since EditPage::attemptSave() doesn't actually check user permissions, and EditPage::edit() imports its own form data (hence we can't use it,) we have to reimplement user permission checking. See CreateRedirect::checkUserPermissions(). --Digi 11/5/07
				$crEdit->attemptSave();
			}
			
			$output .= "ERROR: Authentication failed.";
			
			// TODO: Implement error handling (i.e. "Edit conflict!" or "You don't have permissions to edit this page!") --Digi 11/4/07
		}

		// Return $output so as to serve the page. Note that we only reach this if we haven't processed form data; if we processed form data, then we don't reach this.
		$wgOut->addHTML( $output );
	}
	
	function checkUserPermissions(&$crEdit) {
		// I can't believe I have to do this, but I have to reimplement user permission checking from EditPage::edit();. What prevents me from using the method is one line: it performs importFormData($wgRequest), even though we have to use a different request object. --Digi 11/5/07
		// The below is (almost) verbatim copying from MediaWiki 1.11.0, "/includes/EditPage.php", save minor changes to get everything working.
		global $wgUser, $wgOut;
		
		$permErrors = $crEdit->mTitle->getUserPermissionsErrors( 'edit', $wgUser);
		if( !$crEdit->mTitle->exists() )
			$permErrors += $crEdit->mTitle->getUserPermissionsErrors( 'create', $wgUser);

		# Ignore some permissions errors.
		$remove = array();
		foreach( $permErrors as $error ) {
			if ($crEdit->preview || $crEdit->diff &&
				($error[0] == 'blockedtext' || $error[0] == 'autoblockedtext'))
			{
				// Don't worry about blocks when previewing/diffing
				$remove[] = $error;
			}

			if ($error[0] == 'readonlytext')
			{
				if ($crEdit->edit) {
					$crEdit->formtype = 'preview';
				} elseif ($crEdit->save || $crEdit->preview || $crEdit->diff) {
					$remove[] = $error;
				}
			}
		}
		# array_diff returns elements in $permErrors that are not in $remove.
		$permErrors = array_diff( $permErrors, $remove );

		if ( !empty($permErrors) )
		{
			return false;
		} else {
			return true;
		}
	}

}
