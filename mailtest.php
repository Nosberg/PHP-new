<?php 
require "lib/phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host ="smtp.yandex.ru";
// or smtp.gmail\mail.com\ru
$mail->SMTPAuth = true;
// $mail->SMTPSecure = "ssl";
$mail->Port = 25;
// or 465
$mail->CharSet = "UTF-8";

$body = file_get_contents("index1.html");
$mail->Username = "nosberg2017@yandex.ru";
$mail->Password = "nos268661";
$mail->SetFrom("nosberg2017@yandex.ru","Sys Admin");
$mail->Subject = "Отправка письма";
$mail->MsgHTML($body);
$address = "nosbergduo@mail.ru";
$mail->AddAddress($address,"Никите Осипову");

if($mail->Send()) {
	echo "Успех";
} else {
	echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}



 ?>