<?php 
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO clientes (`nome`,`email`,`senha`)value(\"$nome\",\"$email\",\"$senha\")";
$exec = $pdo->query($sql);

?>