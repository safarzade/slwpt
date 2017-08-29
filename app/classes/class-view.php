<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/2/2017
 * Time: 5:24 PM
 */

class View {

	public static function __callStatic( $name, $arguments ) {

		switch ( $name ) {
			case 'render':
				isset($arguments[1]) ? self::render_view( $arguments[0], $arguments[1] ) : self::render_view( $arguments[0] );
				break;
			case 'renderFile':
				isset($arguments[1]) ? self::render_view_by_include( $arguments[0], $arguments[1] ): self::render_view_by_include( $arguments[0]) ;
				break;
		}
	}

	private static function render_view( $view_name, $data = null ) {

		get_template_part( 'views/' . $view_name );
	}

	public static function render_view_by_include( $view_name, $data = null ) {
		$view_name      = str_replace( '.', DIRECTORY_SEPARATOR, $view_name );
		$view_file_path = THEME_VIEW . DIRECTORY_SEPARATOR . $view_name . '.php';
		if ( is_file( $view_file_path ) && is_readable( $view_file_path ) ) {
			! empty( $data ) ? extract( $data ) : null;
			include $view_file_path;
		}
	}
}