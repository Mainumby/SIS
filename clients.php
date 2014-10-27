 <?php
	session_start();

if (!@$_SESSION['loggedin']) {
	header("Location: main_login.php");
}

?>

<!DOCTYPE html>
<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>	

<html>
<head>
	<title>Clientes</title>
</head>
<body>
	<head>Clientes</head>
	
		<?php include 'connection.php' ?>

		<p>
			<a href="create.php" class="btn btn-primary btn-lg active" role="button">Nuevo Cliente</a>
		</p>


		<table class="table table-bordered">
			<thead>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Nro Documento</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Ciudad</th>
				<th>Fecha Nacimiento</th>
				<th>Observacion</th>
			</thead>
			<tbody>
			<?php	 
			
				$result = mysql_query("SELECT * FROM clientes");
			
			while($data = mysql_fetch_object($result) ):
			?>
			<tr>
				<td><?php echo $data->Nombres ?></td>
				<td><?php echo $data->Apellidos ?></td>
				<td><?php echo $data->NroDocumento ?></td>
				<td><?php echo $data->Direccion ?></td>
				<td><?php echo $data->TelefonoParticular ?></td>
				<td><?php echo $data->Ciudad ?></td>
				<td><?php echo $data->FechaNacimiento ?></td>
				<td><?php echo $data->Observacion ?></td>
				<td>
					<!-- <a href="updatecli.php?id=<?php echo $data->IdCliente ?>">
					<button class="btn btn-info" >Editar</button> -->

					<a href="updatebyId.php?id=<?php echo $data->IdCliente ?>">
						<button class="btn btn-info edit"> Editar </button>
					</a>


					<a href="deleteById.php?id=<?php echo $data->IdCliente ?>">
						<button class="btn btn-danger"> Borrar </button>
					</a>


					<!-- <button class="btn btn-danger" >Eliminar</button>					 -->
					</a>
				</td>

			</tr>
			<?php
			endwhile;
			?>
			</tbody>
		</table>

		<div>

		</div>

</body>
</html>