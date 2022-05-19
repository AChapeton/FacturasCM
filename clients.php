<?php include("db.php")?>

<?php include("includes/header.php")?>
  <div class="container-md">  
    <h1>Clientes</h1>
    
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
      <input type="submit" class="btn btn-primary btn-block" id="save_task" name="save_task" value="Crear Cliente"></input>
      </div>
    </form>
  </div>
  <?php include("includes/footer.php")?>