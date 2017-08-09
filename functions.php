<?php
include "constants.php";
include "app/autoloader.php";
add_action( 'after_setup_theme', 'Initializer::setup' );
add_filter( 'show_admin_bar', '__return_false' );
add_action('init','PostTypes::make_product_post_type');

add_action('add_meta_boxes','MetaBoxes::register_product_price_meta_box');
add_action('save_post','MetaBoxes::save_product_price');

add_action('add_meta_boxes','SliderMetaBox::register_product_slider_meta_box');
add_action('save_post','SliderMetaBox::save_product_slider');

add_filter('manage_product_posts_columns' , 'PostTypes::add_price_column');
add_action('manage_product_posts_custom_column','PostTypes::show_price_value_column',10, 2);