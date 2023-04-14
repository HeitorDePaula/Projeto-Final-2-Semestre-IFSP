<?php 
include 'conecta.php';

$codigo = $_POST["codigo"];
$desconto = $_POST["desconto"];
$usos = $_POST["usos"];

$sql = "INSERT INTO cupons (`codigo`,`desconto`,`usos`)value(\"$codigo\",\"$desconto\",\"$usos\")";
$exec = $pdo->query($sql);

?>