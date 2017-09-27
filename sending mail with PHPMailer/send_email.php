<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            		// Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             		// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     		// Enable SMTP authentication
$mail->Username = 'Your email address';     		// SMTP username
$mail->Password = 'your email password'; 			// SMTP password
$mail->SMTPSecure = 'tls';                  		// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          		// TCP port to connect to

$mail->setFrom('abc@example.com', 'abc');
$mail->addReplyTo('abc@example.com', 'abc');
$mail->addAddress('abc@example.com');   	// Add a recipient


$mail->isHTML(true);  								// Set email format to HTML

$bodyContent = 'This is a test email';				// The content you want to send

$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
