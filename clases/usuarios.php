<?php
require_once "conexion.php";
    class Usuarios extends conexion{
        public function agregarusuario($usuario,$password,$nombre,$apellido,$correo)
        {
           $conexion = conexion::conectar();
           $password = sha1($password);
            $sql = "INSERT INTO usuarios(usuario,contrasena,nombre,apellido,correo)
                    VALUES ('$usuario','$password','$nombre','$apellido','$correo')";
                    $resul = mysqli_query($conexion, $sql);

                    return $resul;
        }

        public function login($usuario, $password)
        {
            $conexion = conexion::conectar();
            $password = sha1($password);
            $sql = "SELECT count(*) as total FROM usuarios
            WHERE usuario = '$usuario' AND contrasena = '$password'";
            $resul = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_array($resul);
            if ($datos['total'] > 0) {
                $_SESSION['id_usuario'] = $usuario;
                header("location:../crud.php");
            }else {
                header("location:../index.php");
            }
        }

    }

?>
