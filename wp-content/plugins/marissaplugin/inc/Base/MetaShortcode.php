<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use \Inc\Base\BaseController;

class MetaShortcode extends BaseController
{
    public function register(){
        add_shortcode("marissa_gallery",array($this,"display_shortcode"));
    }

    public function display_shortcode($number){

		extract(shortcode_atts(array(
			'name' => '',
         ), $number));
         
        $data = get_posts(array(
            'post_type' => 'service',
            'meta_key'  => $name,
            'orderby'   => 'ID',
            'order'     => 'DESC'

        ));
        $layout = "";

        foreach($data as $value){
            var_dump($value);
        }
        // if($data->have_posts()){
        //     while($data->have_posts()) {
        //         $data->the_post();
        //         echo the_ID();
        //         // $layout = require $this->plugin_path . 'views/gallery1.php' ;
                
                
        //     }
        // }

        return $layout;
		//  	$idname = "gal" . $id;
		// 	$data = $wpdb->get_results("SELECT * FROM `$this->marissa_info` WHERE id='$id'");
		// 	$gallery = $wpdb->get_results("SELECT * FROM `$this->marissa_photo` WHERE gallery_id='$idname'");
		// if(!empty($data)){
		// 	$layout = require $this->plugin_path . 'views/gallery1.php' ;
		// 	return $layout;
		// }
	}
}