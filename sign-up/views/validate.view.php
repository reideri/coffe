<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Coffefit - Entrar</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body style="background-image: url(https://alianzapps.com/wp-content/uploads/2017/06/seo.png);">

<div class="container">
  <div class="info">
    <h1><a href="<?php echo RUTA; ?>" class="brand">Coffefit</a></h1><span>Hecho con amor <i class="fa fa-heart"></i> por <a href="http://andytran.me">Coffefit</a></span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://blog.rankwatch.com/wp-content/uploads/2014/08/customer-intelligence-icon-300x300.png"/></div>
  <form class="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="container">
    </div>
  </form>
  <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="container">
      <div class="success">
        Hola! <?php echo $user; ?> Tu Cuenta ha sido activada
      </div>
      <a href="<?php echo RUTA.'sign-up'; ?>">Iniciar Sesion</a>
    </div>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>

  <script src="js/jquery.js"></script>
  <script>
  $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
  });
  </script>

</body>
</html>
