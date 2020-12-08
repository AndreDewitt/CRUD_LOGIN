<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php //bootstrap 4 ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php // Fonts ?>
    <link href="librerias/fontawesome/css/all.css" rel="stylesheet">
    <title>PHP_Crud</title>
  </head>
  <body>
      <nav class="navbar navbar-dark navbar bg-dark">
        <div class="container">
          <a href="index.php" class="navbar-brand">CRUD de datos de gastos</a>
          <?php // menu desplegable ?>
          <div class="dropdown">
            <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button href="/index.php" class="dropdown-item" type="button"></button>
              <a class="dropdown-item" href="procesos/salir.php">Cerrar Sesion</a>
            </div>
          </div>
        </div>

      </nav>
