<?php

/**
 * @package MarissaPlugin
**/

namespace Inc\Base;

class CustomPost
{
    public function register(){
		add_action( 'init', array($this,'codex_book_init') );
		add_theme_support( 'post-thumbnails' );
    }
	public function codex_book_init() {
		$labels = array(
			'name'               => 'Services',
			'singular_name'      => 'Service',
			'menu_name'          => 'Services',
			'name_admin_bar'     => 'Services',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Service',
			'new_item'           => 'New Service',
			'edit_item'          => 'Edit Service',
			'view_item'          => 'View Service',
			'all_items'          => 'All Services',
			'search_items'       => 'Search Services',
			'parent_item_colon'  => 'Parent Service',
			'not_found'          => 'No Service Found',
			'not_found_in_trash' => 'No Service Found in the Trash',
		);
	
		$args = array(
			'labels'             => $labels,
					'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'service' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title','editor','thumbnail')
			
		);
	
		register_post_type( 'service', $args );
	}
    
}