<?php

class Options_Panel {

	public function __construct() {
		$this->init_panel();
		add_action( 'slwpt_save_options_panel', array( $this, 'save_options_handler' ) );
	}

	public function init_panel() {
		add_action( 'admin_menu', array( $this, 'add_panel_menu' ) );
	}

	public function add_panel_menu() {
		add_theme_page(
			'تنظیمات قالب',
			'تنظیمات قالب ',
			'manage_options',
			'slwpt_options_panel',
			array( $this, 'panel_page' )
		);
	}

	public function panel_page() {
		if ( isset( $_POST['save_options'] ) ) {
			do_action( 'slwpt_save_options_panel' );
		}
		$options = self::load();
		View::renderFile( 'admin.options_panel.index', compact('options') );
	}

	public function save_options_handler() {
//		check_admin_referer('save_theme_settings','save_theme_settings_nonce');
		if(!isset($_POST['save_theme_settings_nonce']) || !wp_verify_nonce($_REQUEST['save_theme_settings_nonce'],'save_theme_settings')){
			wp_die('no access');
		}
		$options                          = self::load();
		$options['member_content_active'] = isset( $_POST['member_content_active'] ) ? 1 : 0;
		self::update( $options );

	}

	public static function load() {
		return get_option( THEME_OPTIONS );
	}

	public static function update( $options ) {
		return update_option( THEME_OPTIONS, $options );
	}
}