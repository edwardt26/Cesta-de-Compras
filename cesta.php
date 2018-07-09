<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cestadb";

$conexion = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conexion,'utf8');

if ($_POST['agregar'] = 'boton'){
	$control = "insertar";
$idProducto = $_POST['id'];
$cantidad = $_POST['cantidad'];
}
if ($_POST['consulta'] = 'consultar') {
	$control = "consultar";
	$queryCesta = "SELECT * FROM cestaproducto";
}
$monto = 0;




	

	if ($cantidad){
			
			$count = 0;
			$sql = "SELECT * FROM cestaproducto";
				$result1 = mysqli_query($conexion, $sql);
				while ($row = mysqli_fetch_array($result1)) {
					$count ++;
				};
			//selecciona campo precio
			$querySelect = "SELECT precio FROM producto WHERE id_product = $idProducto";
			$result = mysqli_query($conexion, $querySelect) or DIE ('NO SE CONSIGUEN PRODUCTOS');
			
			//$precio = mysqli_fetch_array ( $result );
			while ($fila = mysqli_fetch_array ( $result )){
				$precio = $fila['precio'];
			}
			if ($count >=2){
				$total = $precio * ($cantidad - 1);
			}else{
			$total = $precio * $cantidad;
			}
			//insertando producto
			if ($count >=2){
			$queryInsert = "INSERT INTO cestaproducto VALUES (null, $idProducto, $precio,
			$cantidad, $total, TRUE)";
		}else{
			$queryInsert = "INSERT INTO cestaproducto VALUES (null, $idProducto, 
			$precio, $cantidad, $total, FALSE)";
			}
			mysqli_query($conexion, $queryInsert) or DIE ('NO SE PUDO AGREGAR');

	};
			?>

<script type="text/javascript">window.location="index.php"</script>
			