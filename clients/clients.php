<?php include("../db.php")?>

<?php include("../includes/header.php")?>
  <div class="container-md">  
    <h1>Clientes</h1>
    
    <?php if(isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php session_unset(); }?>

    <form name="reporte" action="save_client.php" method="post">
      <div class="mb-3">
        <label for="client_name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="client_name" name="client_name">
      </div>
      <div class="mb-3">
        <label for="client_address" class="form-label">Dirección</label>
        <textarea class="form-control" id="client_address" name="client_address" rows="3"></textarea>
      </div>
      <div class="col-auto">
      <input type="submit" class="btn btn-primary btn-block" id="save_client" name="save_client" value="Crear Cliente"></input>
      </div>
    </form>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php

          $query = "SELECT * FROM clientes";
          $result_clients = mysqli_query($connection, $query);

          while($row = mysqli_fetch_array($result_clients)){ ?>
            <tr>
              <td><?php echo $row['client_name'] ?></td>
              <td><?php echo $row['client_address'] ?></td>
              <td>
                <a href="./edit_client.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="./delete_client.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
  <?php include("../includes/footer.php")?>