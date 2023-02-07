<?php
session_start();

$conn = mysqli_connect(
  'terraform-20230130150608082100000001.cxbyuo7avebp.us-east-1.rds.amazonaws.com',
  'root',
  'Vitalik02',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
