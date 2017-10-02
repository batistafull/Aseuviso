
	<br>
	<div class="container">
	<div class="row">
		<div class="col s12">
			<p class="flow-text center indigo-text">Sistemade recargas</p>
			<center><strong>1er Mes, Segundo Semestre 2017</strong></center>
		</div>
	</div>
		<div class="row">
			<div class="col s12 m4 push-m4" style="border: 1px solid #ccc;border-radius: 20px;">
				<form action="recg.php" class="row" method="post">
					<div class="col s12 input-field">
						<input type="text" id="id" name="usuario" placeholder="ID de estudiante">
					</div>
					<div class="center">
						<button class="btn indigo">Recargar</button>
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
