<?php
$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$carrera       = $_POST['carrera'];
$semestre       = $_POST['semestre'];

$db = new PDO('mysql:host=localhost;dbname=cf41','root','');
$db->query("INSERT INTO estudiantes VALUES('$documento','$nombre','$carrera',$semestre)");

header("location:index.php");

/* echo "<pre>";
print_r($db);
echo "</pre>"; */ 

?>

