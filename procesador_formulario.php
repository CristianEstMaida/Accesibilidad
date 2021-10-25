<?php
	include('conexion.php'); 
	$nombre =$_POST['nombre'];
	$email =$_POST['email'];
	$tel =$_POST['tel'];
	$comentario =$_POST['comentario'];

	$query = "INSERT INTO contacto values(NULL,'$nombre','$email','$tel','$comentario')";

	$resultado =mysqli_query($conexion,$query);

	//explicar esto

	$destino = 'cristianmaida@outlook.com';
	$remitente = "From: $nombre <$email>";
	$asunto = $nombre . 'envio una consulta a traves de la web';
	$contenido = 'Nombre:' . $nombre ."\r\n";
	$contenido .= 'Email:' . $email ."\r\n";
	$contenido .= 'Telefono:' . $tel ."\r\n";
	$contenido .= 'Comentario:' . $comentario;

	$remitente_usuario ="From: sitio wb <flx64gmail.com";
	$asunto_usuario = 'Aviso de recibo de consulta';
	$contenido_usuario = 'Hola ' . $nombre . ' enviaste el siguiente comentario ' . $comentario . "\r\n";
	$contenido_usuario .= 'A la brevedad nos comunicaremos';

	mail($destino,$asunto,$contenido,$remitente);
	mail($email, $asunto_usuario, $contenido_usuario, $remitente_usuario);
	
	header('location:contacto.php?envio=ok#contacto');
	//header > redireccionar 

 ?>