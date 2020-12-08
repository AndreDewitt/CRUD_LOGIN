<?php

    class conexion
    {
        public function conectar()
        {
            $conexion = mysqli_connect('localhost','root','','control_gastos');
            return $conexion;
        }


    }
    

?>
