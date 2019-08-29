<?php

if ( ! defined ('WP_UNINSTALL_PLUGIN')){
	die();
}
global $wpdb;

$table = array("marissa_infogallery","marissa_image_gallery","marissa_package");
foreach($table as $value){
	$del = $wpdb->base_prefix . $value;
	$wpdb->query("DROP TABLE `$del`");
}
