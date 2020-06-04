<?php

  use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//require 'vendor/autoload.php';
//require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

   
   // SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'potolalu639@gmail.com';
$mail->Password = '01717645477';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

   $mail->setFrom('potolalu639@gmail.com', 'CodexWorld');


// Add a recipient
$mail->addAddress('01625326156dj@gmail.com');


// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '
    <h2>Send HTML Email using SMTP in PHP</h2>
    <p>It is a test email by CodexWorld, sent via SMTP server with PHPMailer using PHP.</p>
    <p>Read the tutorial and download this script from <a href="https://www.codexworld.com/">CodexWorld</a>.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
?>