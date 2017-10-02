<?php
include 'funcion/conexion.php';
header("Content-Type: text/html;charset=utf-8");
 $con = mysqli_connect($host,$user,$pw)
   or die("Problema al conectar server");
   mysqli_set_charset($con, "utf8");
   mysqli_select_db($con,$db);
  // $b= $_GET['num'];
   if(isset($_GET['num']) && !empty($_GET['num']) && $_GET['num']>0){
	    $b= $_GET['num'];
   }
   else{
	   $b="0";
   }
   $datos = mysqli_query($con,"SELECT * FROM usuario ORDER BY NOMBRE ASC LIMIT $b , 18");
   ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Aseuso</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="container">
		<div class="row">
			<?php 
	while($row = mysqli_fetch_array($datos)){
	$id = $row['ID'];
	$nombre = $row['NOMBRE'];
	$apellido = $row['APELLIDOS'];
	$matricula = $row['MATRICULA'];
	$tiempo = "4to Mes, 1er Semestre ".date('Y');

			$valor = "\$RD500.00";
	?>
		<div class="col m4 s12" style="background: url(img/Imagen1.png);background-size: cover;height:185px;border:1px solid #000;color:#000">
		<br /><br /><br />
		<div class="col m12">
			<center><strong style="font-size:18px;"><?php echo $nombre." ".$apellido; ?> <br /> <?php echo $matricula; ?></strong><br />
			<span style="font-size:12px;"><?php echo $tiempo." · <strong style='font-size:14px'>".$valor; ?></strong></span><br />
			<span style="font-size:12px;"><strong>[|||||<?php echo rand(100000, 999999)."-".$id; ?>|||||]</strong></span></center>
		</div>
		</div>
	<?php } ?>
		</div>
		<br />
		<table class="centered"><tr>
			<td><a href="taqui.php?num=<?php echo $b-18; ?>"><i class="material-icons medium">chevron_left</i></a></td> 
			<td><a href="taqui.php?num=0"><i class="material-icons medium">cached</i></a> </td>
			<td><a href="taqui.php?num=<?php echo $b+18; ?>"><i class="material-icons medium">chevron_right</i></a></td>
		</tr></table>
               </div> 
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    </body>
  </html>