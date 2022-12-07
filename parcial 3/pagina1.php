<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PARCIAL 3</title>
</head>
<body>
<form method="post"
<?php
action="pagina2.php" >
$nombre = $_POST["nombre"];
Por favor, envía la newsletter a: <br
$apellido = $_POST["apellido"];
/>
$email=$_POST["correo electrónico"];
Tu nombre: <input type="text"
eco "Hola". $nombre."  " .
name="nombre" /><br />
$apellido . ", <br />
Tu apellido: <input type="text"
Te has registrado con el siguiente
name="apellido" /><br />
correo electrónico: ". $email.
Tu correo electrónico: <input
".";
?>
type="text" name="email" /><br />
<input type="submit" value="Enviar
formulario" />
</formulario>
</body>
</html>