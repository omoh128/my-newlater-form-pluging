<?php
/*
Plugin Name: My newlater form pluging
Plugin URI: https://github.com/omoh128
Description: NewsLetter form
Version: 1.0
Author: Omomoh
*/

function hello_world_shortcode() {
    return "Hello World";
}
add_shortcode( 'hello_world', 'hello_world_shortcode' );



function hello_world_assets() {
    wp_enqueue_style( 'hello-world', plugin_dir_url( __FILE__ ) . 'assets/css/hello-world.css' );
    wp_enqueue_script( 'hello-world', plugin_dir_url( __FILE__ ) . 'assets/js/hello-world.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hello_world_assets' );
