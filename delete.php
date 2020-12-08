  <?php
    include("dbd.php");

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $query = "DELETE FROM gastos where id_gasto = $id";
        $resul =  mysqli_query($conexion,$query);
          if (!$resul) {
            die("Query Fallido");
          }else {
            $_SESSION['message'] = 'Eliminacion Completado';
            $_SESSION['message_type'] = 'danger';
            header("Location: crud.php");
          }
        }
   ?>
