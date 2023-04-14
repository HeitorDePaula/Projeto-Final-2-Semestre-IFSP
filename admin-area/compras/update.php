<?php 
include 'conecta.php';

$id_comprador = $_POST["id_produto"];
$id_produto = $_POST["id_produto"];
$id = $_POST["id"];

$sql = "UPDATE clientes SET id_comprador=\"$id_comprador\", id_produto=\"$id_produto\" WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

?>