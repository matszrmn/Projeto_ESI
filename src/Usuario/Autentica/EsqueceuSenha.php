<?php
  
  //Email information
  $to = 'matszrmn@gmail.com';
  $subject = 'subject';
  $message = 'mesage';
  $headers = 'headerTest';
  
  //send email
  mail($to, $subject, $message, $headers);
  
  //Email response
  echo "Thank you for contacting us!";
?> 