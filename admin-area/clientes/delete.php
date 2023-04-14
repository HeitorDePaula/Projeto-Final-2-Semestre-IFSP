<?php 
include 'conecta.php';

$id = $_GET["id"];

$sql = "DELETE FROM clientes WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

header("location: read.php");
?>