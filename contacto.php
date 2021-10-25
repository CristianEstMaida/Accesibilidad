<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Libre Accesibilidad</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css" />
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
	<link rel="stylesheet" href="iconos.css">
	<link rel="stylesheet" href="css/libreaccesibilidad.css" />
</head>
<body class="home">

	<section class="holder">
	<?php 	include('inc/cabezal.php') ?>
	
	<!-- <?php 	include('inc/menu.php') ?> -->

	

	
		<!-- <div class="homeimg">
			<img src="img/home/img01.jpg" alt="resto" />
		</div> -->
		<div class="columnas">
			<div class="bienvenidos left">

				<h1>CONTACTO</h1>
				<form action="procesador_formulario.php" method="POST" class="formulario">
					<p>
						info@libreaccesibilidad.com.ar
					</p>
					<h4>
						libreaccesibilidad@hotmail.com   ( se recibe en el móvil en forma inmediata )
					</h4>
					<p>
						Cel /  WhatsApp:                             <!-- (11)     6438-0434 -->
						<!-- <a  onclick="goog_report_conversion ('tel:1164380434')" href="tel:1164380434"><span>(11)     6438-0434</span></a> -->
						<a  href="https://api.whatsapp.com/send?phone=549111164380434&amp;text=Hola!%20Quiero%20hacer%20una%20consulta"><span>(11)     6438-0434</span></a>
					</p>
					<p>
						Fijo: Opcion contestdor                  <!-- (11)     5353 9484 (Dejando mensaje sera transmitido inmediatamente al móvil ) -->
						<a  onclick="goog_report_conversion ('tel:1153539484')" href="tel:1153539484"><span>(11)     5353 9484</span></a>
						  (Dejando mensaje sera transmitido inmediatamente al móvil
					</p>
					<p>
						<label for="nombre">Nombre (requerido)</label>
						<input type="text" id="nombre" name="nombre" required>
					</p>
					<p>
						<label for="email">Tu correo electrónico (requerido)</label>
						<input type="text" id="email" name="email" required>
					</p>
					<p>
						<label for="tel">Asunto</label>
						<input type="text" id="tel" name="tel" >
					</p>
					<p>
						<label for="comentario">Mensaje</label>
						<textarea id="comentario" name="comentario" ></textarea>
					</p>
					<p class="acciones">
						<input type="submit" value="Enviar">
					</p>
				</form>
			</div>
		</div>
		<!-- <div class="columna left">
			<h1>CONTACTO</h1><a name="contacto"></a>
			<form action="procesador_formulario.php" method="POST" class="formulario">
				<p>
					info@libreaccesibilidad.com.ar
				</p>
				<h4>
					libreaccesibilidad@hotmail.com   ( se recibe en el móvil en forma inmediata )
				</h4>
				<p>
					Cel /  WhatsApp:                             (11)     6438-0434
				</p>
				<p>
					<label for="nombre">Nombre (requerido)</label>
					<input type="text" id="nombre" name="nombre" required>
				</p>
				<p>
					<label for="email">Tu correo electrónico (requerido)</label>
					<input type="text" id="email" name="email" required>
				</p>
				<p>
					<label for="tel">Asunto</label>
					<input type="text" id="tel" name="tel">
				</p>
				<p>
					<label for="comentario">Mensaje</label>
					<textarea id="comentario" name="comentario"></textarea>
				</p>
				<p class="acciones">
					<input type="submit" value="Enviar">
				</p>
			</form> -->

		<?php 
		if (isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>
			
			<div class="msg"> El mensaje se envio correctamente </div>
		
		<?php } ?>

		<!-- <h1>Donde Estamos</h1>
		<p>
			San Telmo - Bs As.
		</p>

		</div> -->
		<?php include('inc/ubicacion.php') ?>
	</section>
	
	<script src="js/query.min.js"></script>
	<script scr="validacion/query.validate.js"></script>
	<script scr="validacion/message_es_AR.js"></script>
	<script scr="validacion/contacto.js"></script>
	<?php include('inc/pie.php') ?>
</body>
</html>