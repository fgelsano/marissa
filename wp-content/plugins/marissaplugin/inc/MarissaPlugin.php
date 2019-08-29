<?php

/**
 * @package MarissaPlugin
**/


namespace Inc;

use Inc\Activate;

if(!class_exists('MarissaPlugin')){

	class MarissaPlugin
	{
		public $plugin;

		function __construct(){
			$this->plugin = P_NAME;
		}
		public function register(){
			add_action('admin_menu',array($this, 'add_admin_pages'));

			add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));
		}

		public function settings_link($links){
			$settings_link = "<a href= 'admin.php?page=marissa_plugin'>Settings</a>";
			array_push($links, $settings_link);

			return $links;

		}

		public function add_admin_pages(){
			add_menu_page('Marissa Plugin','Marissa Gallery','manage_options','marissa_plugin', array($this, 'admin_index'),'dashicons-store',110);
		}


		public function admin_index(){
			require_once PATH . 'template/admin.php';
		}
		function activate(){
			Activate::activate();
		}
	}
}
