<?php

/**
 * @package MarissaPlugin
 */
/*
Plugin Name: Marissa Default Plugin
Plugin URI: https://www.creativedevlabs.com/marissaplugin
Description: This is plugin is only intended for marissa theme itself
Version: 1.0.0
Author: CreativeDevLabs
Author URI: https://www.creativedevlabs.com
License: GPLv2 or later
Text Domain: marissaplugin

*/

if(! defined('ABSPATH')){
	die();
}

if(file_exists(dirname(__FILE__ ) . '/vendor/autoload.php')){
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function marissa_activation(){
	Activate::activate();
}
register_activation_hook(__FILE__,'marissa_activation');


function marissa_deactivation(){
	Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'marissa_deactivation');

if(class_exists("Inc\\Init")){
	Inc\Init::register_services();
}
