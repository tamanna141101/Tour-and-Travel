<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){
  
$to_email = "tamannaislam141101@gmail.com";
$subject = "Thank you tamanna ";
$body = "Hello, Sir/Maam
We are contacting you as soon as posible.
Best wishes,
Travel Agency";
$headers = "From: tamannaislam12890@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
}

?>