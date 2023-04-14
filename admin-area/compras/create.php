<?php 
include 'conecta.php';

$id_comprador = $_POST["id_comprador"];
$id_produto = $_POST["id_produto"];

$sql = "INSERT INTO compras (`id_comprador`,`id_produto`)value(\"$id_comprador\",\"$id_produto\")";
$exec = $pdo->query($sql);

?>