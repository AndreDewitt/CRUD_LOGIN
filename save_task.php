<?php

include("dbd.php");
  //recibir datos
  //el dato que se almaceno en el POST fue el nombre del input
  if (isset($_POST['save'])) {

    $concepto = $_POST['concepto'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO gastos(concepto_gasto,cantidad_pago,fecha) VALUES ('$concepto',
                                                                            '$cantidad',
                                                                            '$fecha')";
  $resul = mysqli_query($conexion,$query);
    if (!$resul) {
      die("Query failed");
    }

    $_SESSION['message'] = 'Tarea guardada';
    $_SESSION['message_type'] = 'success';
    header("location: index.php");

  }
 ?>
