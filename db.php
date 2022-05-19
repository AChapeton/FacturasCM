<?php
$connection = mysqli_connect(
  'localhost',
  'root',
  '',
  'catmedia_facturas'
);

if(isset($connection)){
  echo 'DB is connected';
}
?>