<?php
function my_custom_function()
 {
    if (isset($_POST['submit'])) {
     $name = sanitize_text_field( $_POST['your_name']);
     $name = sanitize_text_field( $_POST['your_email']);
     
      $to = 'omoh128@gmail.com';
      $subject = 'me testing form';
      $message = $comments.' - '.$name.' - '.$email;
       wp_mail($to, $subject, $message); 
    } 
}
add_action( 'wp_head', 'my_custom_function' );
