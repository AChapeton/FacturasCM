<?php

include("../db.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM clientes WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $client_name = $row['client_name'];
    $client_address = $row['client_address'];
  }

}

if(isset($_POST['update_client'])){
  $id = $_GET['id'];
  $new_client_name = $_POST['client_name'];
  $new_client_address = $_POST['client_address'];

  $query = "UPDATE clientes set client_name = '$new_client_name', client_address = '$new_client_address' WHERE id = $id";
  mysqli_query($connection, $query);

  $_SESSION['message'] = 'Cliente actualizado.';
  $_SESSION['message_type'] = 'info';
  header("Location: clients.php");
}

?>

<?php include("../includes/header.php") ?>
  <form name="reporte" action="edit_client.php?id=<?php echo $_GET['id'] ?>" method="post">
    <div class="mb-3">
      <label for="client_name" class="form-label">Nuevo nombre</label>
      <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $client_name ?>">
    </div>
    <div class="mb-3">
      <label for="client_address" class="form-label">Nueva dirección</label>
      <textarea class="form-control" id="client_address" name="client_address" rows="3"><?php echo $client_address ?></textarea>
    </div>
    <div class="col-auto">
    <input type="submit" class="btn btn-primary btn-block" id="update_client" name="update_client" value="Guardar cambios"></input>
    </div>
  </form>
<?php include("../includes/footer.php") ?>