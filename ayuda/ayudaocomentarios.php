<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ayuda o comentarios</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/logotipo/logotipo.png">
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<link href="../css/estilosarticulos.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- Titulo de la pagina -->
<header class="contenedor nombrepag">
		<h1>Los catadores otakus</h1>
	</header>
<!-- Menu -->
<nav class="contenedor contenedormenu">
<a href="../index.html" class="menu">Inicio</a>
<a href="Catadores.html" class="menu">Catadores</a>
</nav>

<!-- Formulario -->
<nav class="contenedor">
	<nav class="contenedorp">
	<form method="post">
		<!-- Nombre -->
		<label for="nombre">Ingrese su nombre:</label>
		<input type="text" placeholder="Escribe tu nombre" name="name" id="name" required="">
		<!-- Correo -->
		<label for="email">Ingrese su correo:</label>
		<input type="email" placeholder="Escribe tu correo" name="email" id="email" required="">
		<!-- Asunto del email -->
		<label>Asunto del email:</label>
		<input type="text" placeholder="Asunto" name="asunto" id="asunto" required="">
		<!-- Descripcion del email-->
		<label for="mensaje">Ingrese su mensaje:</label>
		<textarea placeholder="Escribe tu mensaje" name="msg" id="msg"></textarea>
		<!-- Boton enviar-->
		<input type="submit" value="Enviar" name="enviar">
				<!-- PHP -->
		<?php
		include("correo.php");
		?>
		
	</form>
	</nav>
</nav>	
	
</body>
</html>
