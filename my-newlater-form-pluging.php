<?php
/*
Plugin Name: My newlater form pluging
Plugin URI: https://github.com/omoh128
Description: NewsLetter form
Version: 1.0
Author: Omomoh
*/


function mynewslater_form_function() {
  $form ='<form>'; 
  $form .= '<h1>Newsletter Signup</h1>';
  $form .= '<p>No spam, unsubscribe at any time.</p>';
  $form .= '<div class="info">';
  $form .= '<input type="text" placeholder="Your Name">';
  $form .= '<input type="email" placeholder="Your Email">';
  $form .= '</div>';
  $form .= '<input type="submit" value="Subscribe">';
  $form .= '</form>';
  return $form;
}
add_shortcode( 'my_form', 'mynewslater_form_function' );

function news_assets() {
    wp_enqueue_style( 'news-letters', plugin_dir_url( __FILE__ ) . 'assets/css/main.css' );
    wp_enqueue_script( 'news-letters', plugin_dir_url( __FILE__ ) . 'assets/js/hello-world.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'news_assets' );
