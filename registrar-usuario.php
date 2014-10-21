<?php
	session_start();
?>
<?php

	 // $host_db = "localhost";
	 // $user_db = "root";
	 // $pass_db = "root";
	  
	 // $conexion = mysql_connect($host_db, $user_db, $pass_db);
	 
	 // mysql_select_db("basetarjetas", $conexion) or die("No se puede seleccionar la base de datos.");
	 include 'connection.php';
	 $buscarUsuario = "SELECT * FROM usuarios WHERE Cod_User = '$_POST[nombre]' ";
	 
	 $result = mysql_query($buscarUsuario);
	 
	 $count = mysql_num_rows($result);
	  
	 if ($count == 1){
	 echo "<br />". "El Nombre de Usuario ya Existe en nuestra Base de Datos!" . "<br />";
	  
	echo "<a href='registro.html'>Escoger otro Nombre de Usuario</a>";
	  
	exit;
	 }
	 else{
	 
	 $query = "INSERT INTO usuarios (Cod_User, Password) VALUES ('$_POST[nombre]', '$_POST[password]')";
	 
	 if (!mysql_query($query, $link))
	 {
	 die('Error: ' . mysql_error());
	 echo "Error al crear el usuario." . "<br />";
	 }
	 
	 else{
	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 echo "<h4>" . "Bienvenido: " . $_POST['nombre'] . "</h4>";
	 }
	 
	 }
	 
	 mysql_close($link)
	 
?>