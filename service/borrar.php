<?php
	include 'conexion.php';

		mysqli_query($con,"UPDATE usuario SET ESTADO='s', TAQUILLA='n' WHERE MATRICULA='$_GET[mat]'");

mysqli_close($con);


?>