<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use \Inc\Base\BaseController;

class SavePostMeta extends BaseController
{
    public function register(){
        add_action('save_post',array($this,'saveServices'));
    }

    public function saveServices(){
        global $post;

        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return $post->ID;
        }
        if(isset($_POST['marissa_names']) && !empty($_POST['marissa_names'])){
            $names = $_POST['marissa_names'];
            $urls = $_POST['marissa_url'];

            $num = count($urls) - count($_POST['savedata']);
            for($i = 0; $i < $num;$i++){
                $data = $names[$i];
                $url = $urls[$i];
                $this->query("INSERT INTO `$this->marissa_photo` VALUES(NULL,'$post->ID','$data','$url')");
            }
            // foreach($names as $key => $value){
            //     $url = $urls[$key];
            //     $this->query("INSERT INTO `$this->marissa_photo` VALUES(NULL,'$post->ID','$value','$url')");
            // }
        }
        // update_post_meta($post->ID,'name_descript',$_POST['name_descript']);
        update_post_meta($post->ID,'services',$_POST['services']);
    }
}