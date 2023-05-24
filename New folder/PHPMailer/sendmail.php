<?php
require_once('PHPMailer/PHPMailer/phpauto.php');

$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='sachitdalwadi10@gmail.com';
$mail->Password='9016689317';
$mail->SetFrom('sachitdalwadi10@gmail.com');
$mail->Subject='Hello World';
$mail->AddAddress('jayrohit570@gmail.com');
$mail->Send();
?>