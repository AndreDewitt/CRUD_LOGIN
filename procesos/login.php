<?php
    include("../dbd.php");
    require_once "../clases/usuarios.php";

   $usuarios = new usuarios();
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];

    $usuarios->login($usuario, $password);


?>
