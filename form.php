<form method='POST' action='/php/enviar.php'>

<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('jlabra.art019@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>