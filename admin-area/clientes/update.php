<?php 
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$id = $_POST["id"];

$sql = "UPDATE clientes SET nome=\"$nome\", email=\"$email\", email=\"$senha\" WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

?>