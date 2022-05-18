<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presupuestos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container-md">  
    <h1>Hello World!</h1>
    
    <form name="reporte" action="cotizacion.php" method="post">
      <div class="mb-3">
        <label for="client" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="client" name="client">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>