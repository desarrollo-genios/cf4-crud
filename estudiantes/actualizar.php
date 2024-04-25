<?php

$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$carrera       = $_POST['carrera'];
$semestre       = $_POST['semestre'];

$db = new PDO('mysql:host=localhost;dbname=cf41','root','');
$db->query("UPDATE estudiantes SET nombre='$nombre', carrera='$carrera',semestre=$semestre WHERE documento='$documento'");


header("location:index.php");

?>

