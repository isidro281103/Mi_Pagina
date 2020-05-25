<?php 
$destino = "valentinaliceo93@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$teléfono = $_POST["teléfono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " . $nombre "\ncorreo: " . $correo . "Telefono: " . $teléfono . "\nMensaje: " . $mensaje;
	mail($destino,"Contacto", $contenido);
	header("Location:INDEX.html");
 ?>