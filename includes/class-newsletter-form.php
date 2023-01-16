<?php

class NewsletterForm{
    private static $instance;
    private function __construct() {
        // register shortcode
        add_shortcode( 'newsletter_form', array( $this, 'newsletter_form' ) );
       
         // handle form submission
         add_action( 'init', array( $this, 'handle_form_submission' ) );
    }

    public static function get_instance() {
        if ( !isset( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function newsletter_form() {
        // Code to generate the form markup
        $form = '<form id="my-form" method="post" action="">';
        $form .= '<input type="text" name="name" class="info" placeholder="Enter your name">';
        $form .= '<input type="email" name="email" class="info" placeholder="Enter your email">';
        $form .= '<input type="submit" class="btn "value="Subscribe" name="subscribe">';
        $form .= '</form>';
        return $form;
    }
    public function handle_form_submission() {
        if ( isset( $_POST['subscribe'] ) ) {
            $name = sanitize_text_field( $_POST['name'] );
            $email = sanitize_email( $_POST['email'] );
             
            $to = 'omoh12@gmail.com';
            $subject = 'New Subscription';
            $message = 'Name: ' . $name . ' Email: ' . $email;
            $headers = array('Content-Type: text/html; charset=UTF-8');
            wp_mail( $to, $subject, $message, $headers );
            // Send a success message
            wp_redirect( add_query_arg( 'subscribed', 'success', get_permalink() ) );
            exit;
        }
    }
    
}
//initialize the plugin
NewsletterForm::get_instance();
