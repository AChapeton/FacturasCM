<?php

//Including connection
include("../db.php");

//Callind data
if(isset($_POST['save_client'])){
  $client_name = $_POST['client_name'];
  $client_address = $_POST['client_address'];

  //Consulta
  $query = "INSERT INTO clientes(client_name, client_address) VALUES ('$client_name', '$client_address')";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Query failed");
  }

  $_SESSION['message'] = 'Client saved succesfully';
  $_SESSION['message_type'] = 'success';

  header("Location: clients.php");

}

?>