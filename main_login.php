<?php
	session_start();
?>	

<!DOCTYPE html>
<?php include 'template-parts/header.php' /** calling of header(to make it uniform in all template file) **/?>	
<html lang="es">

	<head>
	<meta charset="utf-8" />
	<meta description="Proyecto 10mo Semestre Desarrollo Web"/>
	<meta name="viewport" content="width=device-width minimun-scale=1, maximun-scale=1" />
	 <title>Login</title>
	</head>

	<body>
		<div class="wrapper">

		
		<h1>Login</h1>

		<form name="form1" method="post" action="checklogin.php">

			<label>Nombre:</label>
			<input name="username" type="text" id="username">
			<br><br>

			<label>Password:</label>
			<input name="password" type="password" id="password">
			<br><br>
			<input class="btn btn-primary btn-large" type="submit" name="Submit" value="Entrar">
			
		</form>

		
		<footer>
			
		</footer>
		</div>
	</body>
</html>