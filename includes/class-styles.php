<?php 

class Styles {
    private static $instance;

    private function __construct() {
        // Register stylesheets
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
        
    }

    public static function get_instance() {
        if ( !isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register_styles() {
        wp_register_style( 'my-custom-plugin-styles', plugin_dir_url( __FILE__ ) . 'css/my-custom-plugin.css' );
        wp_enqueue_style( 'my-custom-plugin-styles' );
    }
}
//initialize the plugin
Styles::get_instance();