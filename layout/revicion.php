<?php include '../funcion/conexion.php';
if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
	$datos=mysqli_query($con,"SELECT * FROM usuario WHERE ID='$_POST[usuario]'");
	$row=mysqli_fetch_array($datos);
	if ($row['ID'] && $row['TAQUILLA'] == 's') {
		$dialogo="<p class='green center flow-text'>".$row['NOMBRE']." ".$row['APELLIDOS']."</p>";
	}else if($row['ID'] && $row['TAQUILLA'] == 'n') {
		$dialogo="<p class='red center flow-text'>".$row['NOMBRE']." ".$row['APELLIDOS']."</p>";
	}else {
		$dialogo="<p class='black center white-text flow-text'>Estudiante no existe</p>";
	}
	
}else{
	$dialogo="";
}
?>
	<br>
	<div class="container">
	<div class="row">
		<div class="col s12">
			<p class="flow-text center indigo-text">Revición de carnet</p>
		</div>
		<div class="col s12">
			<?php echo $dialogo; ?>
		</div>
	</div>
		<div class="row">
			<div class="col s12 m4 push-m4" style="border: 1px solid #ccc;border-radius: 20px;">
				<form action="revicion.php" class="row" method="post">
					<div class="col s12 input-field">
						<input type="text" id="id" name="usuario" placeholder="ID de estudiante">
					</div>
					<div class="center">
						<button class="btn indigo">Ver</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$( "#id" ).focus();
		});
	</script>