<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "scripts.php" ?>
</head>
<body>
      <div class="container">
         <div class="row">
            <div class="col-sm-8">
              <h1>Registro de usuarios</h1>
               <form action="procesos/registro.php" method="POST">
                  <label for="usuario">usuario</label>
                  <input type="text" name="usuario" id="usuario" class="form-control">
                  <label for="password">password</label>
                  <input type="text" name="password" id="password" class="form-control">
                  <label for="nombre">nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control">
                  <label for="apellidos">apellidos</label>
                  <input type="text" name="apellidos" id="apellidos" class="form-control">
                  <label for="correo">correo</label>
                  <input type="text" name="correo" id="correo" class="form-control">
                  <br>
                  <button class="btn btn-success">Registrar</button>
                  <a href="index.php" class="btn btn-primary">retorno</a>
               </form>
            </div>
         </div>
      </div>
</body>
</html>
