<?php

	include_once 'includes/db.php';

  use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//require 'vendor/autoload.php';
//require 'phpmailer/PHPMailerAutoload.php';

if(isset($_POST['contact'])){

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO contact (email,subject,message )";

$query .= "VALUES('{$email}','{$subject}','{$message}' ) ";




//echo $sql;exit;   
$conn->query($query);


$mail = new PHPMailer;

   
   // SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '1000310@daffodil.ac';
$mail->Password = 'jannat@14311';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

$mail->setFrom('1000310@daffodil.ac', 'Imsaiful.info');
$mail->addAddress("$email");

// Email subject
$mail->Subject = 'Confirmation of subscription';

// Set email format to HTML
$mail->isHTML(true);


// Email body content
$mailContent = '
    <h2>Thanks for Your Message.</h2>
    ';
$mail->Body = $mailContent;

// Send email
if(!$mail->send())
{ 
    echo '<script type="text/javascript"> alert("Sorry, we could not process your request. Please try  again.");
    window.location.href = "'.'index.php"; </script>';
    // echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else
{
    echo '<script type="text/javascript"> alert("Thanks For contacting Us. we will reply you soon.");
    window.location.href = "'.'index.php"; </script>';
}




}
?>