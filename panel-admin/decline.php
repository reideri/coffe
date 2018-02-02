<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);

  $id = limpiarDatos($_GET['id']);

  if (!$id) {
    // header('Location: '.RUTA.'panel-admin/');
  }

  $user_register = obtener_post_por_id('registro', $conexion, $id);
  $user_register = $user_register[0];

  $statement = $conexion->prepare("DELETE FROM registro WHERE id = $id");
  $statement->execute();

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'mx1.hostinger.mx;mx1.hostinger.mx';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'soporte@coffefit.com';                 // SMTP username
      $mail->Password = 'coffefit2017VEN';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('soporte@coffefit.com', 'Soporte Coffefit');
      $mail->addAddress($user_register['email'], $user_register['usuario']);     // Add a recipient

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'RE: Solicitud de registro';
      $mail->Body = '<body style="background-color: #f0f2f3">
        <div style="width: 90%; max-width: 650px; background-color: #fff; margin: auto; padding: 50px; text-align: center; box-sizing: border-box;">
          <img src="http://coffefit.com/develop/cancel.png">
          <h3 style="font-family: sans-serif; color: #525252;">¡LO SENTIMOS!</h3>
          <p style="color: #525252; font-family: sans-serif; font-weight: 300;">Hemos revisado tu informacion, lamentablemente no cumples con los requisitos necesarios.</p>
        </div>
      </body>';
      $mail->AltBody = 'Coffefit te da la bienvenida, ¡EMPIEZA A GANAR DINERO! - INGRESA A COFFEFIT.COM';

      $mail->send();
      echo 'Message has been sent';
      echo '<script>window.location.href = "http://coffefit.com/panel-admin/"</script>';
      // header('Location: '.RUTA.'panel-admin/');
  } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
} else {
  header('Location: '.RUTA);
}
