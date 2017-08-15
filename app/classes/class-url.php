<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2017
 * Time: 6:24 PM
 */

class Url {

	public static function add_args($params = array()) {
		return add_query_arg($params);
		}

}