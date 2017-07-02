<?php 
$para = 'andres.barretos24@gmail.com, andres.barretos24@hotmail.com';

$asunto = 'mensaje de Andres barreto';
$mail_header = 'From:'.$_POST["email"]."\r\n"
$mail_header .= 'Reply-To:'.$_POST["email"]."\r\n"
$mail_header .= "Content-Type: text/html; charset=utf-8\r\n"
$MESSAGE_BODY ='Nombre:'.$_POST["name"]."\r\n"
$MESSAGE_BODY .='<br>Email:'.$_POST["email"]."\r\n"
$MESSAGE_BODY .='<br>Mensaje:'.n12br($_POST["message"])."\r\n"

mail($para, $asunto, $MESSAGE_BODY,$mail_header) or die("Error al enviar")

header('location:andres.barretos24@gmail.com')

?>