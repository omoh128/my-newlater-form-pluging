<?php 

class Enqueue_script {
    private static $instance;

    private function __construct() {
        // Register stylesheets
        add_action( 'wp_enqueue_scripts', array( $this, 'register_script' ) );
        
    }

    public static function get_instance() {
        if ( !isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register_script() {
        // Register style
        wp_enqueue_style( 'my-newslater-plugin-styles', plugin_dir_url( __FILE__ ) . 'css/main.css' );

         // Register scripts
         wp_enqueue_script( 'my-newslater-plugin-script', plugin_dir_url( __FILE__ ) . '/js/news-letters.js' );
    }
}
//initialize the plugin
Enqueue_script::get_instance();