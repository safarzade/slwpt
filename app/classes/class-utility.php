<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/2017
 * Time: 6:19 PM
 */

class Utility {

	public static function persian_numbers( $input ) {

		$persian_numbers = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
		$en_numbers = array('0','1','2','3','4','5','6','7','8','9');
		return str_replace($en_numbers,$persian_numbers,$input);

	}

}