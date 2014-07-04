<?php
date_default_timezone_set('Etc/UTC');
require_once '../PHPMailer-master/PHPMailerAutoload.php';
//$nombre = $_POST['nombre'];
//$email = $_POST['email'];
//$asunto = $_POST['asunto'];
//$descripcion = $_POST['descripcion'];

$nombre = "Carol";
$email = "Andrea@";
$asunto = "Asunto x";
$descripcion = "Descripcion del mensaje de asunto x";

$mail = new PHPMailer();

$mail->isSMTP();
//$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Mailer = "smtp";
$mail->Port = 25;
$mail->Username = "soasaludcta@gmail.com";
$mail->Password = "Ca1209casoa";
$mail->setFrom('carito.9314@misena.edu.co');
$mail->addAddress('c.andreabo@misena.edu.co');
$mail->Subject = $asunto;
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->msgHTML("<br/>Nombre de la persona: " . $nombre . "<br/>Correo electrónico de contacto: " . $email ."<br/>Descripcion:<br/> ". $descripcion);
//$mail->AltBody = $descripcion . "</br>El nombre de la persona que envio el correo es: " . $nombre . "</br>Y el correo es: " . $email ;
//send the message, check for errors
if (!$mail->send()) {
    echo false;
} else {
    echo true;
}
?>
