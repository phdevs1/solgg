<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$msj = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $msj . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jaguirre@apselom.com';
$asunto = 'Mensaje de la pagina SolucionesOGGk';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
