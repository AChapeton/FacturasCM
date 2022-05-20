<?php include("db.php")?>

<?php include("includes/header.php")?>
  <div class="container-md">  
    <h1>Hello World!</h1>
    
    <form name="reporte" action="cotizacion.php" method="post">
      <div class="mb-3">
        <label for="clients" class="form-label">Cliente</label>
        <select name="clients" id="clients">
          <option value="0">Seleccionar...</option>
          <?php
          
            $query="SELECT * FROM clientes";
            $result=mysqli_query($connection,$query);
            while($clients = mysqli_fetch_array($result)){
              echo '<option value="'.$clients['client_name'].'">'.$clients['client_name'].'</option>';
            }
          ?>
        </select>
        <!-- <input type="text" class="form-control" id="client" name="client"> -->
      </div>
      <div class="mb-3">
        <label for="service" class="form-label">Servicio</label>
        <textarea class="form-control" id="service" name="service" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="client" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="amount" name="amount">
      </div>
      <div class="mb-3">
        <label for="client" class="form-label">Precio ($)</label>
        <input type="number" class="form-control" id="total" name="total">
      </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Generar PDF</button>
    </div>
    </form>
  </div>
  <?php include("includes/footer.php")?>