<?php

$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$sexo       = $_POST['sexo'];
$edad       = $_POST['edad'];

$db = new PDO('mysql:host=localhost;dbname=cf41','root','');
$db->query("UPDATE clientes SET nombre='$nombre', sexo='$sexo',edad=$edad WHERE documento='$documento'");


header("location:index.php");

?>

