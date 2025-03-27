<?php
include "includes/config.php";
$id = (int)$_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";
mysqli_query($conn, $sql);
header("Location:index.php")
?>