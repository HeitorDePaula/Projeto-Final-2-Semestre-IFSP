<?php 
include 'conecta.php';

$codigo = $_POST["codigo"];
$desconto = $_POST["desconto"];
$usos = $_POST["usos"];
$id = $_POST["id"];

$sql = "UPDATE cupons SET codigo=\"$codigo\", desconto=\"$desconto\", usos=\"$usos\" WHERE id=\"$id\" ";
$exec = $pdo->query($sql);

?>