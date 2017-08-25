<?php>
	/**
	* Adds a shortcut link pointing to Special:CreateRedirect to the "toolbox" menu.
	* If applicable, also adds a reference to the current title as a GET param.
	*
	* @return Boolean: true
	*/
class CreateRedirectHooks {

	public static function createRedirect_AddToolboxLink( &$tpl ) {
		global $wgRequest;

		// 1. Determine whether to actually add the link at all.
		// There are certain cases, e.g. in the edit dialog, in a special page,
		// where it's inappropriate for the link to appear.
		// 2. Check the title. Is it a "Special:" page? Don't display the link.
		$action = $wgRequest->getText( 'action', 'view' );
		$title = $tpl->getSkin()->getTitle();

		if( $action != 'view' && $action != 'purge' && !$title->isSpecialPage() ) {
			return true;
		}

		// 3. Add the link!
		$href = SpecialPage::getTitleFor( 'CreateRedirect', $title->getPrefixedText() )->getLocalURL();
		echo Html::rawElement( 'li', null, Html::element( 'a', array( 'href' => $href ), wfMessage( 'createredirect' )->text() ) );

			return true;
		},
	}