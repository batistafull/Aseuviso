<?php
	include 'conexion.php';

    
   if(mysqli_query($con,"UPDATE estado SET STATUS='a' WHERE ID='$_GET[id]'")){
    $rowdata = array('estado' => 'Recargado');
       echo json_encode($rowdata);
   }

		   
mysqli_close($con);

?>