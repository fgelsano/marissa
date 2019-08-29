<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use \Inc\Base\BaseController;

class AjaxPostMeta extends BaseController
{
    public function register(){
        add_action('wp_ajax_delete_photogallery', array($this, 'DeletePhoto'));
    }
    public function DeletePhoto(){
        global $wpdb;
        $id = $_POST['id'];
        if($wpdb->query("DELETE FROM `$this->marissa_photo` WHERE id = '$id'")){
            echo "1";
        }else{
            echo "0";
        }  
    }
}