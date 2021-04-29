<?php
require_once "database/metodosSql.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/PHPMailer.php";
require_once "correos/Enviar.php";
session_start();



if (isset($_POST['name']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['contraseña'])) {

  $m = new MetodosSql();

  $imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
  $activar = array($_POST['name'], $_POST['apellido'], $imagen, $_POST['correo'], $_POST['usuario'], $_POST['contraseña']);
  $_SESSION['activar'] = $activar;

  $e = new Enviar();
  $mensaje = "Bienvenido " . $_POST['name'] . " " . $_POST['apellido'] . ", Favor acceder al siguiente Link para activar tu cuenta-->" . "\n"
    . "http://localhost:8090/asignaciones/ITLA-SOCIAL-NETWORK/usuarios/activar.php" . "\n";



  !$e->enviarEmail($_POST['correo'], "ITLASocialNetwork", $mensaje);




  header("Location: usuarios/redireccion.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets\css\style1.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script href="assets\js\bootstrap.min.js"></script>
  <title>Registrar usuario</title>
</head>

<body background="assets\img\fondo-tecnologia-red-abstracta_115579-197.jpg">

  <nav class="navbar bg-dark">


    <div class=" bg-dark ch">



      <button type="submit" class="btn btn-light"><a href="login.php"> Iniciar sesion </a></button>



    </div>

  </nav>

  <form form='form-container' method="post" action="registrar.php">

    <div class="forma card border-info">
      <div class="text-center card-header ch bg-secondary font-weight-bold">- Datos de registro -</div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="name" placeholder="Ejemplo: Juan" required>
        </div>

        <div class="form-group col-md-6">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ejemplo: Perez" required>
        </div>


        <div class="form-group col-md-6">
          <label for="usuario">Nombre de usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="JuanPerez2020" required>
        </div>


        <div class="form-group col-md-6">
          <label for="contra1">Contraseña</label>
          <input type="password" class="form-control" id="contra1" name="contraseña" required>
        </div>

      </div>

      <div class="form-group ">
        <label for="correo">Correo</label>
        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ejemplo: JuanPerez@gmail.com" required>
      </div>

      <div class="form-group">
        <label for="foto">Elegir foto de perfil...</label>
        <input type="file" class="form-control" id="foto" name="foto">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Registrarse</button>

    </div>

    

  </form>


</body>

</html>