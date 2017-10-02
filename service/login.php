<?php
	include 'conexion.php';
    $data=mysqli_query($con,"SELECT * FROM admin WHERE MATRICULA='$_GET[matricula]' AND PW='$_GET[pw]'");
    $row=mysqli_fetch_array($data);
    if($row['MATRICULA']==$_GET['matricula'] && $row['PW']==$_GET['pw']){
   if(mysqli_query($con,"UPDATE admin SET TOKEN='$_GET[token]' WHERE MATRICULA='$_GET[matricula]' AND PW='$_GET[pw]'")){
    $rowdata = array('estado' => 'Correcto');
       echo json_encode($rowdata);
   }else{
        $rowdata = array('estado' => 'Incorrecto');
       echo json_encode($rowdata);
   }
   }else{
        $rowdata = array('estado' => 'Incorrecto');
       echo json_encode($rowdata);
   }
    

		   
mysqli_close($con);

?>