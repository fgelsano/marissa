<?php



/**

 * @package MarissaPlugin

*/

namespace Inc;



class Init

{

	public static function get_services(){

		return array(

			Base\CreateDB::class,

			Base\Enqueue::class,

			// Pages\Admin::class,

			// Pages\Settings::class,

			// Base\marissaPackage::class,

			Base\CustomPost::class,

			Base\AddMetaBox::class,

			Base\DeletePostMeta::class,

			Base\SavePostMeta::class,

			Base\AjaxPostMeta::class,

			Base\MetaShortcode::class,
			
			Base\ContactFormSubmit::class

			

		);

	}

	public static function register_services(){

		foreach (self::get_services() as $class) {

			$services = self::instantiate($class);

			if(method_exists($services, 'register')){

				$services->register();

			}

		}

	}



	private static function instantiate($class)

	{

		$service = new $class();



		return $service;

	}

}