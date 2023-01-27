<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$extra = $_POST['subject'];
$mensaje = $_POST['message'];

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje = "Su e-mail es " . $mail . "\r\n";
$mensaje = "El comentario extra es " . $extra . "\r\n";
$mensaje = "Enviado el " . date('d/m/y', time());

$para = 'devmrey28@gmail.com';
$asunto = 'Este mail es del portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header(Swal.fire(
  'GRACIAS POR SU COMPRA',
  'ENVIAMOS SU FACTURA A SU E-MAIL',
  'success'
))

?>
