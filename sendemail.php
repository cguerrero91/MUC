<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];


$email_to = 'contacto@muc-apasionadosporel.com';
$email_from = 'Correo sitio web';

$body = 'Name: ' . $nombre . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telefono:' . $number . "\n\n". 'Subject: ' . $asunto . "\n\n" . 'Message: ' . $mensaje ;

if(mail($email_to, $email_from, $body)){
header("Location:pagina.html");
}
?>