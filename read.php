<?php
	session_start();
	echo "<br> Bienvenido! " . $_SESSION['username'];
?>
<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>	
<div class="container home">
		<h3> Clientes </h3>
		<?php include "connection.php" /** calling of connection.php that has the connection code **/ ?>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px">Codigo</th>
                  <th>Nombre</th>
                  <th>NroDocumento</th>
                  <th>Direccion</th>
				  <!-- <th>Course, Year and Section</th> -->
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
				  <!-- <td><?php echo $data->course." ".$data->year." ".$data->section ?></td> -->
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
