<?php
session_start();
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$user_mail=$_SESSION['email'];
$otp =rand(1000,9999);
$_SESSION['otp'] =$otp;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'keyurmodi85@gmail.com';          // SMTP username
$mail->Password = 'keyur@23sep'; 					// SMTP password
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                 // TCP port to connect to

$mail->setFrom($user_mail, 'Online Cake Shop System');
$mail->addReplyTo($user_mail, 'Online Cake Shop System');
$mail->addAddress($user_mail);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Send Mail From Localhost By Online Cake Shop System</h1>';
$bodyContent .= "<p>Your OTP Is <b>$otp</b></p>";

$mail->Subject = 'Email from Localhost by Online Cake Shop System';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("location:verifyotp.php");
}
?>
