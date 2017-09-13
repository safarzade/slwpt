<?php

class Taxonomy{
	public static function register_product_taxonomy() {
		$labels = array(
			'name'              => _x( 'Products', 'taxonomy general name', 'slwpt' ),
			'singular_name'     => _x( 'Product', 'taxonomy singular name', 'slwpt' ),
			'search_items'      => __( 'Search Products', 'slwpt' ),
			'all_items'         => __( 'All Products', 'slwpt' ),
			'parent_item'       => __( 'Parent Product', 'slwpt' ),
			'parent_item_colon' => __( 'Parent Product:', 'slwpt' ),
			'edit_item'         => __( 'Edit Product', 'slwpt' ),
			'update_item'       => __( 'Update Product', 'slwpt' ),
			'add_new_item'      => __( 'Add New Product', 'slwpt' ),
			'new_item_name'     => __( 'New Product Name', 'slwpt' ),
			'menu_name'         => __( 'Product', 'slwpt' ),
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'product_category' ),
		);
		register_taxonomy( 'product_category', array( 'product' ), $args );
	}
}