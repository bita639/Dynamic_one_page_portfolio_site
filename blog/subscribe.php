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

if(isset($_POST['subscribe'])){

$email = $_POST['email'];

$query = "INSERT INTO `newsletter` (`sub_email`) VALUES ('$email')";


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
    <h2>Thanks for subscribing to My Newsletter.</h2>
    <p>You have successfully subscribed to My newsletter. I will send you updates when I will write new technological Post.</p>
    <p>You can like us on facebook and other social medias. Thanks for your co-operation.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send())
{ 
    echo '<script type="text/javascript"> alert("Sorry, we could not process your request. Please try to subscribe to our newslwtter again.");
    window.location.href = "'.'index"; </script>';
    // echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else
{
    echo '<script type="text/javascript"> alert("You have successfully Subscribed to our newsletter.");
    window.location.href = "'.'index"; </script>';
}




}
?>