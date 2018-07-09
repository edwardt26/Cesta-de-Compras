<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cestadb";

$conexion = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conexion,'utf8');
$cestadb = "SELECT * FROM cestaproducto";
mysqli_query($conexion, $cestadb);
mysqli_query($conexion, "DELETE FROM cestaproducto") or DIE ('NO SE BORRARON LOS DATOS');
?>

<script type="text/javascript">window.location="index.php"</script>