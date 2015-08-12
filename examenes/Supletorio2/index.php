<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen Supletorio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form id="form">
		<table class="table table-bordered">
			<tr>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>P. Unitario</th>
				<th>Total</th>
			</tr>

			<?php

			$obtener = get_producto();

			foreach ($obtener as $id_prod=> $detalle){

				echo '<tr>';
				echo '<td><div id="producto">'.$detalle[0].'</div></td>';
				echo '<td>'.'<input type="text" name="cantidad_'.$id_prod.'" id="cantidad_'.$id_prod.'" id_prod="' . $id_prod . '">'.'</td>';
				echo'<td><div id="precio_'.$id_prod.'" name="precio_'.$id_prod.'">'.$detalle[1].'</div></td>';
				echo '<td><div id="total'.$id_prod.'" name="total'.$id_prod.'"></div></td>';
				echo '</tr>';
			} 

			?>
			<tr>
				<td colspan="3" align="right">subtotal</td>
				<td><div id="subtotal" name="subtotal"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="right">iva 12%</td>
				<td><div id="iva" name="iva"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="right">Total</td>
				<td><div id="total" name="total"></div></td>
			</tr>

		</table>
		<table>
			<tr align="center">
				<center><td><input type="submit" class="btn btn-primary" name="guardar" id="guardar" value="Guardar"></td>
				<td><input type="submit" class="btn btn-danger" name="Cancelar" id="cancelar" value="Cancelar"></td></center>

			</tr>
		</table>
		<div id="mensaje"></div>
	</form>
	<script src="js/bootstrap.min.js"></script>      
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>