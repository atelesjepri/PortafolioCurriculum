<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensje fue enviado por" . $name . "\r\n";
$message .= "Su e-mail es: " .$mail . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . "\r\n";

$para = 'ateles.jepri@gmail.com';
$asunto = 'Correo de mi página web';

mail($para, $asunto, utf8_decode($message), $header);

header("location:index.html");
?>