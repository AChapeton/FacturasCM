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
    <label for="name">Nombre: </label>
    <input type="text" name="name" id="name">
    <label for="last_name">Apellidos: </label>
    <input type="text" name="last_name" id="last_name">
    <label for="amount">Cantidad ($): </label>
    <input type="number" name="amount" last_name="amount">
    <input type="submit" value="Generar PDF"/>
  </form>
</body>
</html>