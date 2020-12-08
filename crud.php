<?php
  include("dbd.php");

?>

<?php include("include/header.php") ?>

  <div class="container p-4">
      <div class="row">
        <div class="col-md-4">
          <?php if(isset($_SESSION['message'])) {?>
            <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
              <?= $_SESSION['message'] ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <?php session_unset();} ?>
            <div class="card card-body">
              <form  action="save_task.php" method="POST">
                <div class="form-group">
                  <input type="text" name="concepto" class="form-control" placeholder="concepto" autofocus value="">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="cantidad" placeholder="Cantidad de Pago" rows="2" ></textarea>
                </div>
                <div class="form-group">
                  <input type="text" name="fecha" class="form-control" placeholder="fecha" autofocus value="">
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Save_Task">
              </form>
            </div>
        </div>
        <div class="col-md-8 ">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>concepto</th>
                <th>cantidad</th>
                <th>fecha</th>
                <th>actualizar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query = "SELECT * FROM gastos";
                  $resul = mysqli_query($conexion,$query);

                  while ($row = mysqli_fetch_array($resul)) {?>
                    <tr>
                        <td><?php echo $row['concepto_gasto']; ?></td>
                        <td><?php echo $row['cantidad_pago']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_gasto']?>" class="btn btn-warning">
                              <i class="fas fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id_gasto']?>" class="btn btn-danger">
                              <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>

<?php include("include/footer.php") ?>
