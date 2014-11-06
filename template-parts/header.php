<?php
// echo "<br> Bienvenido! " . $_SESSION['username'];
	
	if (!@$_SESSION['loggedin']) {
		# code...
		$user="";
	} else {
		# code...
		
		$user=$_SESSION['username'];
	}
	
	
?>
<html>
<head>
<title> SGTC </title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/normalize.css" />





</style>
</head>
<body>
<header class="wrapper">
	
		<figure id="logo">
			<img src="img/logo.png"> 
		</figure>
		<h1 class="title"> SGTC </h1>
	
		<figure id="avatar">
			<img src="img/avatar.png">
			<br>		
			<a href="checklogin.php?logout=yes" class="input-mini" >logout <?= $user ?></a>	
		</figure>


	
	
</header>
<nav class="wrapper">
	<?php include 'template-parts/menu.php' ?>
</nav>
