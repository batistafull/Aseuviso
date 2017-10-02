<?php
	include 'conexion.php';
   
		mysqli_query($con,"INSERT INTO usuario (NOMBRE,APELLIDOS,MATRICULA,TEL,EMAIL) 
	VALUES ('$_GET[nombre]','$_GET[apellidos]','$_GET[matricula]','$_GET[telefono]','$_GET[correo]')");

mysqli_close($con);

?>