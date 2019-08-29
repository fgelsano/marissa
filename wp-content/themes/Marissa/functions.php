<?php
	include 'cdl_marissa_walker.php';
	function cdl_marissa_setup(){
		register_nav_menus(array(
			'primary' => __('Primary Menu','marissa beauty shop')
		));
	}
	add_action( 'after_setup_theme', 'cdl_marissa_setup' );

	function enqueuemain(){
		$params = array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) );
		wp_localize_script( 'marissa', 'params', $params );
	}
	add_action('init','enqueuemain');

	function home_submitform(){
		$data = $_POST['values'];
		$name = $data[0]['value'];
		$email = $data[1]['value'];
		$contact = $data[2]['value'];
		$message = $data[3]['value'];
		
		$msg = $name . "\n" . $email . "\n" . $contact . "\n" . $message;
		if(mail("","Customer",$msg)){
			echo "1";
		}else{
			echo "0";
		}
		
	}
	add_action('wp_ajax_home_submit', 'home_submitform');
	add_action('wp_ajax_nopriv_home_submit', 'home_submitform');

	function main_submitform(){
		
		$data = $_POST['values'];
		$name = $data[0]['value'];
		$contact = $data[1]['value'];
		$email = $data[2]['value'];
		$address = $data[3]['value'];
		$service = $data[4]['value'];
		$message = $data[5]['value'];
		
		$msg = "Name: " . $name . "\n" . "Email: " .$email . "\n" . "Contact: " .$contact . "\n" . "Address: " . $address . "\n" . "Service: " . $service . "\n\n" . "Message\Inquiry: " . $message;
		if(mail("","Customer Inquire",$msg)){
			echo "1";
		}else{
			echo "0";
		}
		
	}
	add_action('wp_ajax_main_contact', 'main_submitform');
	add_action('wp_ajax_nopriv_main_contact', 'main_submitform');