<?php
/*
 Plugin Name: WM Cookies Required Warning
 Description: Plugin to add a warning at the top of pages for users that don't have cookies enabled.
 Author: Dave Mainville
 Author URI: http://superdave2u.com
*/
 
class WMCookiesRequired {

	public function __construct() {
		add_action('init'     , array(__CLASS__ , 'register_cookie_assets'));
		add_action('wp_footer', array(__CLASS__ , 'inject_controller'));
	}

	static function register_cookie_assets() {
		wp_register_script	( 'cookie_controller'		, plugins_url( 'js/cookie_controller.js'		, __FILE__), array('jquery'), '1.0', true);
		wp_enqueue_style	( 'cookie_warning_styles'   , plugins_url( 'css/cookie_warning_styles.css'	, __FILE__ ) );
	}

	static function inject_controller() {
		wp_print_scripts('cookie_controller');
	}
}
$WMCookiesRequired = new WMCookiesRequired();
?>