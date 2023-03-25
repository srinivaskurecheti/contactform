<?php
// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // collect form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // validate form data
  if (empty($name) || empty($email) || empty($message)) {
    die('Please fill in all required fields.');
  }
  
  // send email
  $to = 'snivas456k@gmail.com'; // replace with your own email address
  $subject = 'New contact form submission';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
  } else {
    echo 'There was a problem sending the message. Please try again later.';
  }
  
}
?>
