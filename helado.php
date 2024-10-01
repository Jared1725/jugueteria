<!DOCTYPE html>
<html>
<head>
	<title>Helados La Michoacana</title>
	<style>
		body {
			background-color: skyblue;
		}
		#titulo {
			color: red;
			font-size: 24px;
			font-weight: bold;
		}
		table {
			border-collapse: collapse;
			width: 50%;
		}
		th, td {
			border: 1px solid black;
			padding: 10px;
			text-align: left;
		}
	</style>
</head>
<body>
<center>
	<h1 id="titulo">Helados La Michoacana</h1>
	<form action="" method="post">
		<table>
			<tr>
				<th>Nombre del Helado</th>
				<th>Número</th>
				<th>Precio</th>
			</tr>
			<tr>
				<td>Fresa</td>
				<td>1</td>
				<td>50</td>
			</tr>
			<tr>
				<td>Chocolate</td>
				<td>2</td>
				<td>60</td>
			</tr>
			<tr>
				<td>Vainilla</td>
				<td>3</td>
				<td>40</td>
			</tr>
			<tr>
				<td>Mango</td>
				<td>4</td>
				<td>55</td>
			</tr>
			<tr>
				<td>Pistache</td>
				<td>5</td>
				<td>65</td>
			</tr>
		</table>
		<p><h5>¿Qué helado desea? (ingrese el número)</h5></p>
		<input type="number" name="numero_helado">
		<input type="submit" value="Seleccionar">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero_helado = $_POST["numero_helado"];
		switch ($numero_helado) {
			case 1:
				echo "<br><h5> Excelente, ha seleccionado el helado 1 que es de Fresa y cuesta 50</h5>";
				break;
			case 2:
				echo "<br><h5> Excelente, ha seleccionado el helado 2 que es de Chocolate y cuesta 60</h5>";
				break;
			case 3:
				echo "<br><h5> Excelente, ha seleccionado el helado 3 que es de Vainilla y cuesta 40</h5>";
				break;
			case 4:
				echo "<br><h5> Excelente, ha seleccionado el helado 4 que es de Mango y cuesta 55</h5>";
				break;
			case 5:
				echo "<br><h5> Excelente, ha seleccionado el helado 5 que es de Pistacho y cuesta 65</h5>";
				break;
			default:
				echo "<br><h5> Número de helado no válido</h5>";
		}
	}
	?>
    <center>
</body>
</html>
