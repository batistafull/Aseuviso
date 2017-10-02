<?php include 'conexion.php';

    mysqli_set_charset($con, "utf8");

    		$datos = mysqli_query($con,"SELECT * FROM estado INNER JOIN usuario ON estado.ID=usuario.ID WHERE estado.ID='$_GET[id]'");
      $rowdata = array();
		   while($row=mysqli_fetch_assoc($datos))
		   {
		   		$rowdata[] = $row;
		   }
		echo json_encode($rowdata);

   ?>