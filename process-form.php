<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $amount = $_POST["amount"];

  // Configure your email settings
  $to = "rishabhsisodiya1998@gmail.com"; // Replace with your email address
  $subject = "New Registration";
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nAmount: $amount";

  // Send the email
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for your registration. We have sent you an email with payment details.";
  } else {
    echo "Sorry, there was an error sending your registration details. Please try again.";
  }
}
?>
