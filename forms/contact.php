<?php
  require 'PHPMailer/PHPMailerAutoload.php';

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@siipl.co';

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
  $mail->SMTPAuth = true;
  $mail->Username = 'info@siipl.co'; // Your Gmail email address
  $mail->Password = 'MYRA%221122'; // Your Gmail password or App Password
  $mail->SMTPSecure = 'tls'; // Use 'tls' for TLS encryption or 'ssl' for SSL encryption
  $mail->Port = 587; // Port for TLS (465 for SSL)

  // Sender and Recipient
  $mail->setFrom($_POST['email'], $_POST['name']);
  $mail->addAddress($receiving_email_address);

  // Email Content
  $mail->isHTML(true);
  $mail->Subject = $_POST['subject'];
  $mail->Body = $_POST['message'];

  if ($mail->send()) {
    echo 'OK';
  } else {
    echo 'Error: ' . $mail->ErrorInfo;
  }
?>
