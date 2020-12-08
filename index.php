<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once "scripts.php";
      include("dbd.php");
      if (isset($_SESSION['id_usuario'])) {
        header("location:crud.php");
      }

    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
      <div class="container">
        <div class="cont">
            <div class="row">
                <div class="col-sm-8">
                  <h1>Login de usuarios</h1>
                    <form action="procesos/login.php" method="POST">
                        <label for="usuario">usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <br>
                        <button class="btn btn-primary">Entrar</button>
                        <a href="registro.php" class="btn btn-success">Registrarse Ahora</a>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </body>
</html>
