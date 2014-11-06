<?php
	session_start();
?>
<?php include 'template-parts/header.php' ?>
	<div class="wrapper container home">
		<h3> Crear Nuevo Cliente </h3>
		
		<?php
			include 'connection.php'; 
			
			if( isset( $_POST['create'] ) ): 

				$fname = $_POST['fname']; 
				$lname = $_POST['lname'];
				$ndoc = $_POST['ndoc'];
				$addr = $_POST['addr'];
				$phone = $_POST['phone'];
				$city = $_POST['city'];
				$dbirth = $_POST['dbirth'];
				$obs = $_POST['obs'];
				
				mysql_query("INSERT INTO clientes(Nombres,Apellidos,NroDocumento,Direccion,TelefonoParticular,Ciudad,FechaNacimiento,Observacion) 
							VALUES('$fname','$lname','$ndoc','$addr','$phone','$city','$dbirth','$obs')") 
							or die(mysql_error()); 
							
				echo "<div class='alert alert-info'> Successfully Saved. </div>"; 
			
			endif;
		?>
		
		
		<form action="" method="POST">
			<label> Nombre y Apellido: </label>
				<input type="text" placeholder="Nombre" class="input-medium" name="fname" />
				
				<input type="text" placeholder="Apellido" class="input-medium" name="lname"/>

			<label>Tipo Documento</label>
			<?php
			?>
				<select name="tdoc">

					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>

				</select>


			<label> Nro Documento: </label>
				<input type="text" placeholder="Nro Documento" class="input-medium" name="ndoc" />

			<label> Direccion: </label>
				<textarea class="span7" name="addr"></textarea>
			
			
			<label> Telefono Particular: </label>
				<input type="text" placeholder="Telefono" class="input-medium" name="phone" />

			<label> Ciudad: </label>
				<input type="text" placeholder="Ciudad" class="input-medium" name="city" />


			<label>Fecha de Nacimiento</label>
			<input type="date" name="dbirth" value="">


			<label> Observacion: </label>
				
				<textarea class="span7" name="obs"></textarea>


			<input type="submit" name="create" value="Guardar" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
