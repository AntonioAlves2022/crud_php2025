<?php
$host = "localhost";
$user = "root";
$port = "3306";
$dbname = "agenda";
$password = "usbw";

$conn = mysqli_connect($host, $user, $password, $dbname, $port);

if(!$conn){
  die("Erro de conexão: ".mysqli_connect_error());
}
?>