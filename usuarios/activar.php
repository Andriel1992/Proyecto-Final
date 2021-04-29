<?php
require_once "../database/metodosSql.php";
session_start();


if (isset($_POST['submit'])) {
  $m = new MetodosSql();
  $datos = $_SESSION['activar'];

  if ($m->GuardarUsuarios($datos) == 1) {
    echo "<div class='alert alert-primary' role='alert'>
 Tu registro ha sido un exito...  <a href='../login.php' class='alert-link'>Volver al login</a>. 
</div>";
  } else {
    echo 'Fallo al agregar';
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activar Cuenta </title>
  <link href="..\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="..\assets\css\style1.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script href="..\assets\js\bootstrap.min.js"></script>
</head>

<body>

  <style>
    .i {
      padding-top: 150px;
      background-color: grey;

    }
  </style>


  <div class=" i card text-center">
    <div class="card-header"></div>
    <div class="card-body">
      <form action="activar.php" method="post">
        <button type="submit" name="submit" class="btn btn-secondary btnRegistrar"><strong>Activar Cuenta</strong> </button>
      </form>
    </div>
  </div>


  </div> 

</body>

</html>