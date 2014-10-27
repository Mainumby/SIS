<?php
	session_start();
?>
<?php include 'template-parts/header.php' ?>
	<div class="container home">
		<h3> Actualizar </h3>
		
		<?php
			include 'connection.php'; 
			$ID = $_GET['id']; 
			
			if( isset( $_POST['update'] ) ):
				
				
				
				$fname = $_POST['fname']; 
				$lname = $_POST['lname'];
				$ndoc = $_POST['ndoc'];
				$addr = $_POST['addr'];
				$phone = $_POST['phone'];
				$city = $_POST['city'];
				$dbirth = $_POST['dbirth'];
				$obs = $_POST['obs'];
				


				
				
				mysql_query("UPDATE clientes SET Nombres = '$fname', Apellidos = '$lname',NroDocumento = '$ndoc', Direccion = '$addr' ,TelefonoParticular='$phone', Ciudad='$city', FechaNacimiento='$dbirth',Observacion='$obs'
					WHERE IdCliente = '$ID'") 
							or die(mysql_error()); 
							
				echo "<div class='alert alert-info'> Successfully Updated. </div>"; /** success message **/
			
			endif;
			
			
			$result = mysql_query("SELECT * FROM clientes WHERE IdCliente='$ID'");
			
			$data = mysql_fetch_object( $result ); 
			
		?>
		
		
		<form action="" method="POST">
			<label> Nombre y Apellido: </label>
				<input type="text" value="<?php echo $data->Nombres ?>" class="input-medium" name="fname" />
				
				<input type="text" value="<?php echo $data->Apellidos ?>" class="input-medium" name="lname"/>
			<label> Direccion: </label>
				<textarea class="span7" name="addr" value=""><?php echo $data->Direccion ?></textarea>
			
			<label> Nro de Documento: </label>
				<input type="text" value="<?php echo $data->NroDocumento ?>" class="input-medium" name="ndoc" />


			<label>Telefono Particular</label>
			<input type="text" value="<?php echo $data->TelefonoParticular ?>" class="input-medium" name="phone" >

			<label>Ciudad</label>
			<input type="text" value="<?php echo $data->Ciudad ?>" class="input-medium" name="city"></input>

			<label>Fecha de Nacimiento</label>
			<input type="date" name="dbirth" value="<?php echo $data->FechaNacimiento ?>" >
			<!-- <input type="text" value="<?php echo $data->FechaNacimiento ?>" class="input-medium" name="dbirth"></input> -->

			<label>Observacion</label>
			<input type="text" value="<?php echo $data->Observacion ?>" class="input-xxlarge" name="obs"></input>



			<br />
			<input type="submit" name="update" value="Editar" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
