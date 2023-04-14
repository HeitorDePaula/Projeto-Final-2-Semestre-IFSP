<?php 
include 'conecta.php';

$nome = $_POST["nome"];
$valor = $_POST["valor"];
$tipo = $_POST["tipo"];
$capa = $_POST["capa"];

$sql = "INSERT INTO produtos (`nome`,`valor`,`tipo`,`capa`)value(\"$nome\",\"$valor\",\"$tipo\",\"$capa\")";
$exec = $pdo->query($sql);

?>