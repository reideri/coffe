<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro | Coffefit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="http://www.coffefit.com/">
      <img src="coffefit-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
</nav>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	<div class="caja">

		<div class="field">
	  <label class="label">Nombre</label>
	  <div class="control">
	    <input class="input" type="text" placeholder="Nombre(s)" name="nombre">
	  </div>
	</div>

	<div class="field">
	  <label class="label">Usuario</label>
	  <div class="control has-icons-left has-icons-right">
	    <input class="input" type="text" placeholder="Usuario" name="usuario">
	    <span class="icon is-small is-left">
	      <i class="fa fa-user"></i>
	    </span>
	    <span class="icon is-small is-right">
	      <i class="fa fa-check" id="check"></i>
	    </span>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Contraseña</label>
	  <div class="control has-icons-left">
	    <input class="input" type="password" placeholder="Password" name="password">
	    <span class="icon is-small is-left">
	      <i class="fa fa-lock"></i>
	    </span>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Correo Paypal</label>
	  <div class="control has-icons-left has-icons-right">
	    <input class="input" type="text" placeholder="paypal@gmail.com" value="@gmail.com" name="email">
	    <span class="icon is-small is-left">
	      <i class="fa fa-envelope"></i>
	    </span>
	    <span class="icon is-small is-right">
	      <i class="fa fa-warning"></i>
	    </span>
	  </div>
	</div>

	<p>Paginas de facebook, separar con ( , ) o ( / )</p>
	<div class="field">
	  <div class="label"></div>
	  <div class="control">
	    <textarea class="textarea" placeholder="https://www.facebook.com/Coffefit1/" name="pages"></textarea>
	  </div>
	</div>
	<br>
	<div class="subirprueba">
		<p>Sube una imagen del panel de administración de tu página de facebook.</p>
		<div class="file">
	  <div class="file-label">
	    <input type="file" name="thumb">
	  </div>
	</div>
	</div>
	<br>
	<div class="field">
	  <div class="control">
	    <div class="checkbox">
	      <input type="checkbox" name="terminos" id="terminos">
	      <label for="terminos">Acepto los <a href="#">terminos y condiciones</a></label>
	    </div>
	  </div>
	</div>

	<?php if (!empty($errores)): ?>
		<p><?php echo $errores ?></p>
	<?php endif; ?>

	<div class="field is-grouped">
	  <div class="control">
	    <button type="submit" class="button is-link">Submit</button>
	  </div>
	</div>
</form>


</div>
</body>
</html>
