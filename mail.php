<?php 
error_reporting("-1");
ini_set("display_errors", "On");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "goenkapalak11@gmail.com";
$mail->Password = "************";	
$mail->setFrom('goenkapalak11@gmail.com', 'Sys_admin');
$mail->addAddress($_POST["mail"]);
$mail->Subject = "EMAIL VERIFY";
$mail->isHTML(true);

$mail->Subject = 'Message subject';
$mail->Body    = 'Click on the <a href="http://localhost/signup_aftermail.php">LINK</a> to carry registration';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if($mail->send())
	echo  "<script type='text/javascript'>alert('Click on the link sent to your email address to carry registration');</script>";
else
	echo  "<script type='text/javascript'>alert('Email not sent');</script>";?>
