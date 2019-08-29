<?php



/**

 * @package MarissaPlugin

**/



namespace Inc\Base;



use \Inc\Base\BaseController;



class ContactFormSubmit extends BaseController
{
	public function register(){
		add_action("wp_ajax_home_submit", array($this,"nav_contact_form"));
		add_action("wp_ajax_nopriv_home_submit", array($this,"nav_contact_form"));
	}
	public function nav_contact_form(){
		
	}
}