<?php

require_once('mailer/PHPMailerAutoload.php')

$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';

$mail->isHTML();
$mail->Username = 'leminhman0312web@gmail.com';
$mail->Password = 'myweb0312!'

$mail->SetFrom('no-reply@web.org');
$mail->Subject = "Hello world";
$mail->Body = "Test email";
$mail->AddAddress('web@myweb.org');

$mail->Send();



?>