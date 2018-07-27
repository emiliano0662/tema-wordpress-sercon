<?php
$nombre 	= $_POST['name'];
$email 		= $_POST['email'];
$asunto 	= $_POST['affair'];
$mensaje 	= $_POST['message'];

$para = 'emiliano0662@gmail.com';

$mensaje = "Nombre: ".$nombre."<br><br>"."Email: ".$email."<br><br>"."Asunto: ".$asunto."<br><br>"."Mensaje: ".$mensaje;

//Cabecera de la funcion mail()
$headers = "From: ".$email." \r\n";
$headers .= "Reply-To: ".$email."\r\n"; //La dirección por defecto si se responde el email enviado.
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //La codificación del email.
 
//Mandamos el email.
mail($para, 'Formulario de contacto', $mensaje, $headers); ?>