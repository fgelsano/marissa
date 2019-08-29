<?php

/**
 * @package MarissaPlugin
**/
namespace Inc\Base;

class BaseController
{
	public $plugin_path;

	public $plugin;

	public $plugin_url;

	public $marissa_info;

	public $marissa_photo;

	public $marissa_package;
	
	public function __construct(){
		global $wpdb;

		$this->plugin_path = plugin_dir_path(dirname(__FILE__ , 2));

		$this->plugin = plugin_basename(dirname(__FILE__ , 3)) . '/marissaplugin.php';

		$this->plugin_url = plugin_dir_url(dirname(__FILE__ , 2));

		$this->marissa_info = $wpdb->base_prefix . "marissa_infogallery";

		$this->marissa_photo = $wpdb->base_prefix . "marissa_image_gallery";

		$this->marissa_package = $wpdb->base_prefix . "marissa_package";
	}

	public function query($sql){
		global $wpdb;

		$values = $wpdb->query($sql);
		return $values;
	}

	public function showresults($sql){
		global $wpdb;

		return $wpdb->get_results($sql);
	}

	
}