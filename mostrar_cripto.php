<?php 

$conex = mysqli_connect("localhost","root","","criptomonedas");

 ?>


<!DOCTYPE html>
<html>
<head>
	
	<!--NOMBRE: Vanessa Esmeralda Flores Cervantes MATRICULA: ES172004305-->
	<meta charset="UTF-8">
        <title>ALtA CRIPTOMONEDAS | Vanessa Flores</title>
        <link rel="stylesheet" href="css/estilo.css">
        

        <div class= "registro">
        <form action="#" method="POST">
</head>
<body>

<br>
<br><br><br><br><br><br><br><br><br><br>
<center><table border="1" >
		<tr>
			<td>Id_transaccion</td>
			<td>Criptomoneda</td>
			<td>Transaccion</td>
			<td>Cantidad_cripto</td>
			<td>Tipo de cambio en dolares</td>
			<td>Compra_venta_dolar</td>	
			<td>Comision</td>
			<td>Valor Real</td>
		</tr>

		<?php 
		$consulta="SELECT * from criptomoneda";
		$resultado=mysqli_query($conex,$consulta);

		while($mostrar=mysqli_fetch_array($resultado)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_transaccion'] ?></td>
			<td><?php echo $mostrar['criptomoneda'] ?></td>
			<td><?php echo $mostrar['transaccion'] ?></td>
			<td><?php echo $mostrar['cantidad_cripto'] ?></td>
			<td><?php echo $mostrar['cambio_dolar'] ?></td>
			<td><?php echo $mostrar['compra_venta_dolar'] ?></td>
			<td><?php echo $mostrar['comision'] ?></td>
			<td><?php echo $mostrar['valoreal'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table></center>

		<!--REGISTRAR-->
		<br><br><br>
		<center><a href="Eliminar_cripto.php"> Regresar al Formulario Eliminar_cripto</a></center>
		<!--REGISTRAR-->
		<br><br>
		<center><a href="index.html"> Regresar al Inicio</a></center>
		
</body>
</html>