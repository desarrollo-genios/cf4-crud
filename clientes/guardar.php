<?php
$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$sexo       = $_POST['sexo'];
$edad       = $_POST['edad'];

$db = new PDO('mysql:host=localhost;dbname=cf41','root','');
$db->query("INSERT INTO clientes VALUES('$documento','$nombre','$sexo',$edad)");

header("location:index.php");

/* echo "<pre>";
print_r($db);
echo "</pre>"; */ 

?>

