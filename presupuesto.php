<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CatMedia - Facturas</title>
</head>
<body>
  <h1>Hello World!</h1>
  <form name="reporte" action="cotizacion.php" method="post">
    <label for="name">Cliente: </label>
    <input type="text" name="client" id="client"><br>
    <label for="last_name">Servicio: </label>
    <input type="text" name="service" id="service"><br>
    <label for="amount">Cantidad: </label>
    <input type="number" name="amount" last_name="amount"><br>
    <label for="amount">Cantidad ($): </label>
    <input type="number" name="total" last_name="total"><br>
    <input type="submit" value="Generar PDF"/>
  </form>
</body>
</html>