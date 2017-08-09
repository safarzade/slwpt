<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/2017
 * Time: 4:34 PM
 */

class MetaBoxes {

	public static function register_product_price_meta_box() {
		add_meta_box( 'product_price_meta_box',
			'قیمت محصول',
			'MetaBoxes::product_price_content_handler',
			'product'
		);
	}

	public static function product_price_content_handler( $post ) {
		$post_price      = (int) get_post_meta( $post->ID, 'product_price', true );
		$post_price_sale = (int) get_post_meta( $post->ID, 'product_price_sale', true );
		View::renderFile( 'admin.metabox.product.product_price', array(
			'product_price'         => $post_price,
			'product_price_sale' => $post_price_sale
		) );

		$_SESSION['basket'] =[
				'items'  => [
					1 => [ 'title' => '','price' => 2000,],
					1 => [ 'title' => '','price' => 2000,],
					1 => [ 'title' => '','price' => 2000,],
					1 => [ 'title' => '','price' => 2000,],
					1 => [ 'title' => '','price' => 2000,],
				],
			'total_price' => 100000

		];
	}

	public static function save_product_price( $post_id ) {
		//

		if ( isset( $_POST['product_price'] ) && intval( $_POST['product_price'] ) > 0 ) {
			update_post_meta( $post_id, 'product_price', intval( $_POST['product_price'] ) );
		}
		if ( isset( $_POST['product_price_sale'] ) && intval( $_POST['product_price_sale'] ) > 0 ) {
			update_post_meta( $post_id, 'product_price_sale', intval( $_POST['product_price_sale'] ) );
		}

	}

}