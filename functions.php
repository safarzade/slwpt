<?php
include "constants.php";
include "app/autoloader.php";
add_action( 'after_setup_theme', 'Initializer::setup' );
add_filter( 'show_admin_bar', '__return_false' );

