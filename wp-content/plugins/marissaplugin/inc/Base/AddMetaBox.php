<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use \Inc\Base\BaseController;

class AddMetaBox extends BaseController
{
    public function register(){
        add_action('admin_init',array($this,'addMeta'));
        
    }

    public function addMeta(){
        add_meta_box('marissa_meta','Gallery',array($this,'addField'),'service','normal','low');
        add_meta_box('marissa_services','Services Type',array($this,'addType'),'service','normal','high');
    }
    public function addType(){
        global $post;

        $data = get_post_custom($post->ID);
        $val = isset($data['services']) ? $data['services'][0] : 'no value';
        require $this->plugin_path . 'inputs/select.php';
    }
    public function addField(){
        global $post;

        $data = get_post_custom($post->ID);
        $photos = $this->showresults("SELECT * FROM `$this->marissa_photo` WHERE gallery_id = '$post->ID'");

        require $this->plugin_path . 'template/input.php';
    }
}