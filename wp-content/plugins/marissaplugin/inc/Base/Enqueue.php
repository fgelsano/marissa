<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

use Inc\Base\BaseController;
class Enqueue extends BaseController
{
    public function register()
    {
        add_action( 'admin_enqueue_scripts', array($this,'enqueue') );
    }
    function enqueue()
    {
        $params = array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) );
        $url = $this->plugin_url."assets/images/";
        wp_enqueue_media();
        // wp_enqueue_style( 'marissa', $this->plugin_url . 'assets/css/marissa.css');
        wp_enqueue_style( 'marissa_services', $this->plugin_url . 'assets/css/services.css');
        // wp_enqueue_style( 'bootstrap', $this->plugin_url . 'assets/css/bootstrap.min.css');
        wp_enqueue_script( 'marissa', $this->plugin_url . 'assets/js/marissa.js');
        wp_localize_script( 'marissa', 'params', $params );
        wp_localize_script( 'marissa', 'url', $url );
    }
}