<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/2017
 * Time: 6:51 PM
 */

class Product {
	const PRICE_META_KEY = 'product_price';

	public static function price( $product_id ) {
		if ( ! $product_id ) {
			return 0;
		}
		$price = get_post_meta( $product_id, self::PRICE_META_KEY, true );
		if ( intval( $price ) > 0 ) {
			return Utility::persian_numbers( number_format( apply_filters('product_price',$price) ) );
		}

		return 0;
	}

}