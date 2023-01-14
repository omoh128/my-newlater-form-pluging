<?php
if (isset($_POST['submit'])) {
    $to = 'example@example.com';
    $subject = 'Form Submission';
    $message = $_POST['my_input'];
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail( $to, $subject, $message, $headers );
}
