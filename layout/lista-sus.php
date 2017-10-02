<?php include 'seccion.php'; include 'cabecera.php'; ?>
<?php 
include 'conexion.php';
    mysqli_set_charset($con, "utf8");
   if(isset($_GET['q']) && !empty($_GET['q'])){
	   $datos = mysqli_query($con,"SELECT * FROM usuario WHERE ESTADO='s'
								AND MATCH(NOMBRE,APELLIDOS) AGAINST('$_GET[q]') ORDER BY NOMBRE ASC");
   }else{
   $datos = mysqli_query($con,"SELECT * FROM usuario WHERE ESTADO='s' ORDER BY NOMBRE ASC");
   }
   ?>
   <div class="navbar-fixed">
   <nav class="white">
				<div class="nav-wrapper">
				  <form action="lista-sus.php">
					<div class="input-field">
					  <input id="search" type="search" required name="q">
					  <label for="search"><i class="material-icons grey-text">search</i></label>
					  <i class="material-icons">close</i>
					</div>
				  </form>
				</div>
			  </nav></div>
<ul class="collection">
<?php 
	while($row = mysqli_fetch_array($datos)){
	$id = $row['ID'];
	$nombre = $row['NOMBRE'];
	$apellido = $row['APELLIDOS'];
	$matricula = $row['MATRICULA'];
	?>
    <li class="collection-item avatar" href="user.php?mat=<?php echo $matricula; ?>">
      <i class="material-icons circle grey">perm_identity</i>
      <span class="title grey-text"><?php echo $nombre." ".$apellido; ?></span>
      <p class="grey-text"><?php echo $matricula; ?></p>
	  <a href="reactivar.php?mat=<?php echo $matricula; ?>" class="secondary-content btn red">Activar</a>
    </li>
		<?php } ?>
  </ul>
<?php include 'pie.php'; ?>