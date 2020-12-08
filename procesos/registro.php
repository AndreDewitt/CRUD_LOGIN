<?php

require_once "../clases/usuarios.php";
$usuarios = new usuarios();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];

 $respuesta = $usuarios->agregarusuario($usuario,$password,$nombre,$apellidos,$correo);

    if ($respuesta) {
        ?>
            <Script>
                alert("Registro exitoso");
                window.location.href = '../index.php';
            </Script>
        <?php

    } else{

       ?>
        <script>
        alert("Fallo");
        window.location.href= '../registro.php';
        </script>


       <?php
    }
?>
