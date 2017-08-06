<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/2/2017
 * Time: 5:24 PM
 */

class View {

	public static function __callStatic($name,$arguments) {
		if($name == 'render'){
			self::render_view($arguments[0]);
		}
	}

	private static function render_view( $view_name ) {
		get_template_part('views/'.$view_name);
	}
}