<?php
	session_start();
?>
<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>
	<div class="container home">
		<h3> Crear Nuevo Cliente </h3>
		
		<?php
			include 'connection.php'; /** calling of connection.php that has the connection code **/
			
			if( isset( $_POST['create'] ) ): /** A trigger that execute after clicking the submit 	button **/
				
				/*** Putting all the data from text into variables **/
				
				$fname = $_POST['fname']; 
				$ndoc = $_POST['ndoc'];
				$lname = $_POST['lname'];
				$addr = $_POST['addr'];
				// $gender = $_POST['gender'];
				// $course = $_POST['course'];
				// $year = $_POST['year'];
				// $section = $_POST['section'];
				
				mysql_query("INSERT INTO clientes(Nombres,Apellidos,NroDocumento,Direccion) 
							VALUES('$fname','$lname','$ndoc','$addr')") 
							or die(mysql_error()); /*** execute the insert sql code **/
							
				echo "<div class='alert alert-info'> Successfully Saved. </div>"; /** success message **/
			
			endif;
		?>
		
		
		<form action="" method="POST">
			<label> Nombre y Apellido: </label>
				<input type="text" placeholder="Nombre" class="input-medium" name="fname" />
				<!-- <input type="text" placeholder="Middle Name" class="input-medium" name="mname" /> -->
				<input type="text" placeholder="Apellido" class="input-medium" name="lname"/>
			<label> Direccion: </label>
				<textarea class="span7" name="addr"></textarea>
			
			<label> Nro Documento: </label>
				<input type="text" placeholder="Nro Documento" class="input-xxlarge" name="ndoc" />
			
			<input type="submit" name="create" value="Guardar" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
