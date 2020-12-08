<?php
  include("dbd.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM gastos where id_gasto = $id";
    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $concepto = $row['concepto_gasto'];
      $cantidad = $row['cantidad_pago'];
      $fecha = $row['fecha'];

    }
  }

  if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $conceptou = $_POST['concepto'];
    $cantidadu = $_POST['cantidad'];
    $fechau = $_POST['fecha'];
    $query = "UPDATE gastos Set concepto_gasto = '$conceptou',
    cantidad_pago = '$cantidadu', fecha = '$fechau' where id_gasto = $id";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'Actualizacion correcta';
    $_SESSION['message_type'] = 'primary';
   header("Location: crud.php");
  }

?>

<?php include ("include/header.php") ?>
  <div class="container p-4">
    <div class="row">
      <div class="col mx-auto">
        <div class="card card-body">
          <form action="edit.php?id=<?php echo $_GET['id']; ?>"  method="post">
            <div class="form-group">
              <input type="text" name="concepto" value="<?php echo $concepto; ?>"
                class="form-control" placeholder="actualiza el concpeto">
            </div>
            <div class="form-group">
              <textarea name="cantidad" rows="2" class="form-control" placeholder="Actuliza la cantidad"><?php echo $cantidad; ?></textarea>
            </div>
            <div class="form-group">
              <input type="text" name="fecha" value="<?php echo $fecha; ?>"
                class="form-control" placeholder="actualiza la fecha">
            </div>
            <button type="submit"class="btn btn-success" name="update">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include ("include/footer.php") ?>
