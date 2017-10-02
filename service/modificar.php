<?php
	include 'conexion.php';

mysqli_query($con,"UPDATE usuario SET NOMBRE='$_GET[nombre]', APELLIDOS='$_GET[apellidos]',
							MATRICULA='$_GET[mat]', TEL='$_GET[telefono]', EMAIL='$_GET[correo]'
							WHERE ID='$_GET[id]'");

mysqli_close($con);


?>