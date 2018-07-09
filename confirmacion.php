<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "cestadb";

$conexion = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conexion,'utf8');
$monto = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmacion de Compra</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="animate.min.css">
</head>
<body>

	<h2>Factura de Compra</h2>

	<?php
		$selectCesta2 = "SELECT * FROM cestaproducto";
		$result = mysqli_query($conexion, $selectCesta2) or DIE ('no se seleccionaron productos');
	?>

	<table class="">
		
		<th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th>
		<?php
			while ($row = mysqli_fetch_array($result)) {
				$id = $row['product_id'];
				$nombreProducto = "SELECT * FROM producto WHERE id_product = $id";
				$result1 = mysqli_query($conexion, $nombreProducto) or DIE ('NO SE CONSIGUE el NOMBRE DEL PRODUCTO');
				while($registro = mysqli_fetch_array($result1)){
					$nombre = $registro['nombre'];
				}
				
			
		?>

		<tr>
					<td><?php echo $nombre;?></td>
					<td><?php echo $row['subtotal'];?><input type="hidden" name=""></td>
					<td><?php echo $row['cantidad'];?><input type="hidden" name=""></td>
					<td><?php echo $row['total'];?><input type="hidden" name=""></td>

				</tr>
		<?php
		$monto += $row['total'];
	}
		?>

		<tr>
			<th colspan="3">Total</th>
			<td><?php echo $monto;?></td>
		</tr>
	</table>
	
	<a class="btn btn-primary" href="borrar.php" rol="button">Comprar de Nuevo</a>
</body>
</html>