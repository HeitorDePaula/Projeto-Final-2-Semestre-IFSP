<?php 
include 'conecta.php';

$id = $_GET["id"];

$sql = "DELETE FROM compras WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

header("location: read.php");
?>