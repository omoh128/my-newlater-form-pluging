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

class NewsletterForm_Plugin {
    private static $instance;
    private function __construct() {
        // register shortcode
        add_shortcode( 'newsletter_form', array( $this, 'render_form' ) );
        // register stylesheet
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
    }

    public static function get_instance() {
        if ( !isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function render_form() {
        // Code to generate the form markup
        $form = '<form>';
        $form .= '<input type="email" name="email" placeholder="Enter your email">';
        $form .= '<input type="submit" value="Subscribe">';
        $form .= '</form>';
        return $form;
    }

    public function register_styles() {
        // register the stylesheet
        wp_register_style( 'newsletter-form-css', plugins_url( 'newsletter-form/css/styles.css' ) );
        // enqueue the stylesheet
        wp_enqueue_style( 'newsletter-form-css' );
    }
}
//initialize the plugin
NewsletterForm_Plugin::get_instance();
