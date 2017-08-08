<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/7/2017
 * Time: 4:10 PM
 */

class PostTypes {

	public static function make_product_post_type() {
		$labels = array(
			'name'               => _x( 'محصولات', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'محصول', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'محصولات', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'محصول', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'اضافه کردن', 'محصول', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'اضافه کردن محصول', 'your-plugin-textdomain' ),
			'new_item'           => __( 'جدید محصول', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'ویرایش محصول', 'your-plugin-textdomain' ),
			'view_item'          => __( 'نمایش محصول', 'your-plugin-textdomain' ),
			'all_items'          => __( 'همه محصولات', 'your-plugin-textdomain' ),
			'search_items'       => __( 'جستجوی محصولات', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'والد محصولات:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'محصولی یافت نشد', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'در زباله دان محصولی یافت نشد', 'your-plugin-textdomain' )
		);
		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'product'),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);
		register_post_type( 'product', $args );
	}

	public static function add_price_column($columns) {
		$columns['product_price'] = 'قیمت';
		return $columns;
	}

	public static function show_price_value_column($column, $post_id) {
		if($column == 'product_price'){
			$product_price = get_post_meta($post_id,'product_price',true);
			echo Utility::persian_numbers(number_format($product_price));
//			echo '<button class="change_product_status" data-id="'.$product_price.'">تغییر وضعیت</button>';
		}
	}

}