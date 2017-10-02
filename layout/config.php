
<div class="collection">
    <a class="collection-item" href="lista-sus.php">
      <i class="material-icons grey-text">warning</i>
      <span class="grey-text">Usuarios suspendidos</span>
    </a>
	<a class="collection-item modal-trigger" href="#modal3">
      <i class="material-icons grey-text">done_all</i>
      <span class="grey-text">Accion por lote</span>
    </a>
	  </a>
	<a class="collection-item" href="destruir.php">
      <i class="material-icons grey-text">power_settings_new</i>
      <span class="grey-text">Cerrar Session</span>
    </a>
</div>
  <!--******************************modal********************************-->
   <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Cambiar por lote</h4>
	  <div class="row center">
      <div class="col s12 m4"><a href="cambio.php?cambio=t" class="btn red">Reiniciar Boleta</a></div>
      <div class="col s12 m4"><a href="cambio.php?cambio=a" class="btn red">Reactivado y nuevo a Activo</a></div>
		  <div class="col s12 m4"><a href="cambio.php?cambio=s" class="btn red">Activo a Suspendido</a></div>
	  </div>  
   </div>
  </div>
