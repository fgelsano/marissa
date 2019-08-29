<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use \Inc\Base\BaseController;

class DeletePostMeta extends BaseController
{
    public function register(){
        add_action( 'admin_init', array($this,'delete') );
    }
    public function delete(){
        add_action( 'delete_post', array($this,'ondelete') );
    }

    public function ondelete(){
        global $post;
        if ( $post->post_type != 'service' ) return;


        $this->query("DELETE FROM `$this->marissa_photo` WHERE gallery_id ='$post->ID'");
        //Delete Photo Gallery;
    }
}