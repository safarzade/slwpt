<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/2/2017
 * Time: 6:40 PM
 */

class Initializer {

	public static function setup() {
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
	}

	public static function start_session() {
		$session_id = session_id();
		if(empty($session_id)){
//			session_regenerate_id();
			session_start();
		}
	}

}