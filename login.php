<?php
session_start();

if (isset($_SESSION['usuarios'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets\css\style1.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script href="assets\js\bootstrap.min.js"></script>


</head>

<body>


  <nav class="navbar bg-dark">


    <div class=" bg-dark ch">



      



    </div>

  </nav>


  <form class='form-container' method="post" action="usuarios/usuarios.php">
    <div class="forma card border-info">

      <div class="text-center card-header ch bg-secondary font-weight-bold">- Iniciar Sesión -</div>

      <label for="usuario">Nombre de usuario</label>
      <input type="text" class="form-control txt" id="usuario" aria-describedby="emailHelp" placeholder="Digite su usuario" name="txtUsuario" required>
      <i class="fas fa-user"></i>


      <label for="password">Contraseña</label>
      <input type="password" class="form-control txt" id="password" placeholder="Digite su contraseña" name="txtContra" required>
      <i class="fas fa-lock"></i>


      <button type="submit" class="btn btn-primary btn-block">
        Iniciar sesion.
      </button>
      <button type="submit" class="btn btn-outline-dark magin-top text-white">
        <a class="text white" href="registrar.php"> Registrarse </a></button>
  </form>


  </div>
  </div>



  

</body>

</html>