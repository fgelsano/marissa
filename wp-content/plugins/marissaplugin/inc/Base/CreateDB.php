<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use Inc\Base\BaseController;

class CreateDB extends BaseController
{
	public function register(){

		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();
		$db = $wpdb->get_results("SHOW DATABASE LIKE '$this->marissa_info' ");

		if(empty($db)){
			$sql = [
				[
					"CREATE TABLE `$this->marissa_photo` (
					id int(16) primary key not null auto_increment,
					gallery_id varchar(150) not null,
					image_name text null,
					image_path text not null	
					)$charset_collate;"
				],
			];

			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

			foreach($sql as $value){
				dbDelta($value);
			}
			
		}
	}
}