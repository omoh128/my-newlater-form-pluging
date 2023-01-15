<?php
/*
Plugin Name: My newlater form pluging
Plugin URI: https://github.com/omoh128
Description: NewsLetter form
Version: 1.0
Author: Omomoh
*/


function mynewslater_form_function() {

  $form ='<form action="' . plugin_dir_url( __FILE__ ) . '/form-submit.php" method="post">';
  $form .= '<h3>Newsletter Signup</h3>';
  $form .= '<p>No spam, unsubscribe at any time.</p>';
  $form .= '<div class="info">';
  $form .= '<input type="text"  name="your_name"  placeholder="Name" >';
  $form .= '<input type="email" name="your_email" placeholder="Email">';
  $form .= '</div>';
  $form .= '<input type="submit" name="submit" value="Subscribe">';
  $form .= '</form>';
  return $form;
}
add_shortcode( 'my_form', 'mynewslater_form_function' );

function news_assets() {
    wp_enqueue_style( 'news-letters', plugin_dir_url( __FILE__ ) . 'assets/css/main.css' );

    
    wp_enqueue_script( 'jquery-validation', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js', array( 'jquery' ), '1.19.2', true );

    wp_enqueue_script( 'news-letters', plugin_dir_url( __FILE__ ) . 'assets/js/news-letters.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'news_assets' );
