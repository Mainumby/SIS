<?php
	session_start();
?>
<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>	
<div class="container home">
		<h3> Perfil de Cliente </h3>
		<?php include "connection.php" /** calling of connection.php that has the connection code **/ ?>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px">Stud ID</th>
                  <th>Nombre y Apellido</th>
                  <th>Nro Documento</th>
                  <th>Direccion</th>
				  <!-- <th>Course, Year and Section</th> -->
				  <th> </th>
                </tr>
              </thead>
              <tbody>
			  <?php 
				$result = mysql_query("SELECT * FROM clientes");
				
				while($data = mysql_fetch_object($result) ):
			  ?>
                <tr>
                  <td><?php echo $data->IdCliente ?></td>
                  <td><?php echo $data->Nombres." ".$data->Apellidos?></td>
                  <td><?php echo $data->NroDocumento?></td>
				  <td><?php echo $data->Direccion?></td>
				
				  <td>
					<a href="updatebyId.php?id=<?php echo $data->IdCliente ?>">
						<button class="btn btn-info"> Editar </button>
					</a>
				  </td>
                </tr>
			  <?php
				endwhile;
			  ?>
              </tbody>
		</table>
</div>	
</div>
</body>
</html>
