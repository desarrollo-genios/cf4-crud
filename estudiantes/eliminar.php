<?php
$documento = $_GET['documento'];
$db = new PDO('mysql:host=localhost;dbname=cf41','root','');
$db->query("DELETE FROM estudiantes WHERE documento='$documento';");

header("location:index.php");

?>



