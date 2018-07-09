<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "cestadb";

	$conexion = mysqli_connect($host,$user,$pass,$db);
	mysqli_set_charset($conexion,'utf8');
	$query = "SELECT * FROM producto";
	$result = mysqli_query($conexion, $query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Shoping Basket</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="animate.min.css">
</head>
<body>
	<tbody class="body">
		<?php

		function llenarCesta($id_product)
			{
				echo "hola";
				$querySelect = "SELECT 'precio' FROM producto WHERE 'id_product' = $id_product";
				$precio = mysql_query($querySelect);
			};
		?>
		 <div ><h2 class="col-md-8 col-md-offset-2">Lista de Productos</h2></div>
		
		<!--tabla de productos-->

		<table border = '1' class='col-md-8 col-md-offset-2' 
		id='table'><tr><th>Producto</th><th>Descripcion</th><th>Cantidad</th><th>Precio</th>
      		<th>Accion</th></tr>
      <?php
      	while ($fila = mysqli_fetch_array ( $result )){
      	?>
      	<form name="<?php echo "form". $fila['id_product']?>" method="post" action="cesta.php">
      	<tr>
      	<td><?php echo $fila['nombre'];?></td>
      	<td><?php echo $fila['descripcion'];?></td>
      	<td><div class="form-group">
		    <label for="exampleFormControlSelect1">Example select</label>
		    <select class="form-control" name="cantidad" id="exampleFormControlSelect1">
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		    </select>
  </div> </td>		
      	<td><?php echo $fila['precio'];?></td>
      	
      	<td>
      		<input type="hidden" name="id" value="<?php echo $fila['id_product']; ?>">
      		<button type="submit" name="agregar" class="btn btn-primary" value="boton">Agregar a la cesta</button> 
      		
      	</td>
      	</tr>
      </form>

      <?php
      }; //fin while
      	?>
      	</table>
      	 
      	<a class="btn btn-info" name="consulta" href="cesta2.php" role="button">Consultar Cesta</a>
		 

	</tbody> 
	 
</body>
</html>