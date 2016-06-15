<?php
  $message = $_POST['message'];
  $email = $_POST['email'];
  $subject = "Someone filled out contact form on FloraNSauna"
  $to = "ted107mk@gmail.com"
  $body = "Email: $email\n Message: $message"
  $from = "From: Flora N"
  if($_POST['submit'])
  {
      if (mail ($to, $subject, $body, $from)) { 
          echo '<p>Your message has been sent!</p>';
      } else { 
          echo '<p>Something went wrong, go back and try again!</p>'; 
      } 
  }
?>