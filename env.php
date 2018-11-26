<?php
$destino="153110267@upmh.edu.mx";
$asunto="Opinion del sitio";
 
$nombre=$_POST['name'];
$email=$_POST['email'];
$mensaje=$_POST['message'];
$msn="
Nombre: $nombre  \n
email: $email  \n
mensaje: $mensaje  \n
";
 
$headers = 'From: '.$email."\r\n".
'Reply-To:'.$email."\r\n".
'X-Mailer: PHP/'.phpversion();
 
mail($destino,$asunto,$msn,$headers);
echo "Enviado!";

?>