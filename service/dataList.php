<?php include 'conexion.php';

    mysqli_set_charset($con, "utf8");
    if(isset($_GET['mat'])){
    		$datos = mysqli_query($con,"SELECT * FROM usuario WHERE MATRICULA='$_GET[mat]'");
      $rowdata = array();
		   while($row=mysqli_fetch_assoc($datos))
		   {
		   		$rowdata[] = $row;
		   }
		echo json_encode($rowdata);
    }else if(isset($_GET['id'])){
    		$datos = mysqli_query($con,"SELECT * FROM usuario WHERE ID='$_GET[id]'");
      $rowdata = array();
		   while($row=mysqli_fetch_assoc($datos))
		   {
		   		$rowdata[] = $row;
		   }
		echo json_encode($rowdata);
    }else{
	$datos = mysqli_query($con,"SELECT * FROM usuario ORDER BY NOMBRE ASC");
      $rowdata = array();
		   while($row=mysqli_fetch_assoc($datos))
		   {
		   		$rowdata[] = $row;
		   }
		echo json_encode($rowdata);
	}
   ?>