<?php
/*
Plugin Name: My newlater form pluging
Plugin URI: https://github.com/omoh128
Description: NewsLetter form
Version: 1.0
Author: Omomoh
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-newsletter-form.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-styles.php';


function my_custom_plugin_init() {
    NewsletterForm::get_instance();
    Styles::get_instance();
}

add_action( 'plugins_loaded', 'my_custom_plugin_init' );