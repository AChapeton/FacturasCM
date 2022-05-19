<?php

if(isset($_POST['save_task'])){
  $client_name = $_POST['client_name'];
  $client_address = $_POST['client_address'];
  echo $client_name;
  echo $client_address;
}

?>