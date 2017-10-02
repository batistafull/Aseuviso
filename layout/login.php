<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Aseuso</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="blue-grey darken-4">
	
	<div class="container">
	<center><img src="img/logo.png" alt="" class="responsive-img" width="200" /></center>
		<div class="row">
    <form class="col s12" action="log.php" method="post">
	      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate white">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="pw" class="validate white">
          <label for="password">Password</label>
        </div>
      </div>
	  <button class="btn waves-effect waves-light blue col s12" type="submit" >Entrar</button>
    </form>
  </div>
		
	</div>

      
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>     
    </body>
  </html>