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
	<title>Compra</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="animate.min.css">
</head>
<body>

	<h2>Productos a Comprar</h2>
	<?php

		$selectCesta = "SELECT * FROM cestaproducto";
		$result = mysqli_query($conexion, $selectCesta) or DIE ('no se seleccionaron productos');
	?>
	<table>
				<th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th>
		<?php

		while ($row = mysqli_fetch_array($result)) {
				$id = $row['product_id'];
				$nombreProducto = "SELECT * FROM producto WHERE id_product = $id";
				//
				$result1 = mysqli_query($conexion, $nombreProducto) or DIE ('NO SE CONSIGUE el NOMBRE DEL PRODUCTO');
				while($registro = mysqli_fetch_array($result1)){
					$nombre = $registro['nombre'];
				}
				$oferta= $registro['oferta'];
				if ($oferta = 'oferta') {
					
				
			?>
			
				<tr>
					<td><?php echo $nombre;?></td>
					<td><?php echo $row['subtotal'];?><input type="hidden" name=""></td>
					<td><?php echo $row['cantidad'];?><input type="hidden" name=""></td>
					<td><?php echo $row['total'];?><input type="hidden" name=""></td>

				</tr>
				<?php
			}else{
				?>
				<tr >
					<td><?php echo $nombre;?></td>
					<td><?php echo $row['subtotal'];?><input type="hidden" name=""></td>
					<td><?php echo $row['cantidad'];?><input type="hidden" name=""></td>
					<td><?php echo $row['total'];?><input type="hidden" name="">Oferta</td>

				</tr>
				<?php
			}
				?>
			<?php
					$monto += $row['total'];
					};

	?>
			<tr>
				<td colspan="3" >Monto a Pagar</td>
				<td><?php echo $monto;?></td>
			</tr>
			<tr><a class="btn btn-primary" href="confirmacion.php" role="button">Comprar</a></tr>
	</table>
</body>
</html>
