<?php 
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$materia = $_POST["materia"];
$senha = $_POST["senha"];
$id = $_POST["id"];

$sql = "UPDATE produtos SET nome=\"$nome\", valor=\"$valor\", tipo=\"$tipo\", capa=\"$capa\" WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

?>