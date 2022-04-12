<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.live.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= 'founym12@gmail.com';
$mail->Password= 'Vok52030';
$mail->SMTPSecure = 'tls';


 $name = $_POST['name'];
 $subject = $_POST['subject'];
 $mailFrom = $_POST['email'];
 $message = $_POST['message'];


$mail->From = 'founym12@gmail.com';
$mail->FromName= $name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = "You have recevived an email from </br> Name : <b>" .$name."</b></br>"."Subject :  <b>".$subject."</b></br>"."Email : <b>".$mailFrom ."</b></br>"."Message :  <b>".$message ."</b>" ;
$mail->addAddress('founym12@gmail.com');




if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    header('Location: ' . $_SERVER['HTTP_REFERER']);

}


?>