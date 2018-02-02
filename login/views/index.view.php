<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Coffefit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>
  <body>
 <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="http://www.coffefit.com/">
      <img src="coffefit-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
</nav>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="caja">
  <div class="field">
    <p class="control has-icons-left has-icons-right">
      <input class="input" type="email" placeholder="Email" name="email">
      <span class="icon is-small is-left">
        <i style="color: #1479ff;" class="fa fa-envelope"></i>
      </span>
      <span class="icon is-small is-right">
        <i  style="color: #1479ff;" class="fa fa-check"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control has-icons-left">
      <input class="input" type="password" placeholder="Password" name="pass">
      <span class="icon is-small is-left">
        <i style="color: #1479ff;" class="fa fa-lock"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control">
      <button class="button is-success">
        Login
      </button>
    </p>
  </div>
  <div class="field">
    <?php if (!empty($error)): ?>
      <p><?php echo $error; ?></p>
    <?php endif; ?>
  </div>
  </div>
</form>

<div class="cajainfo">
	<h1 style="color: #3d91ff" class="title">Caja de actualizaciones...</h1>
	<br>
<h2 class="subtitle">Se implentara el uso del CPM (Costo Por Mil) <br> Los paises mejores pagados seran <br>
<span style="color: #3d91ff">Estados Unidos</span>, <span style="color: #3d91ff">Canada</span> y <span style="color: #3d91ff">Mexico</span>.</h2>
</div>
  </body>
</html>
