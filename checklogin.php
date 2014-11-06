<?php

/* start the session */
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Check Login</title>
 <meta charset = "utf8" />
</head>

<body>

<?php

//  $host_db = "SERVER O IP";
//  $user_db = "USER_BD";
//  $pass_db = "PASSWORD";
//  $db_name = "NOMBRE_BD";
//  $tbl_name = "NOMBRE_TABLA";

// // Connect to server and select databse.
// mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");

// mysql_select_db("$db_name")or die("Cannot Select Data Base");
include 'connection.php';
$php_self= $_SERVER['PHP_SELF'];
// sent from form
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * FROM $tbl_name WHERE Cod_User = '$username' and Password='$password'";

$result=mysql_query($sql);

// counting table row
$count = mysql_num_rows($result);
// If result matched $username and $password

if($count == 1){

 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;

// echo "<br> Bienvenido! " . $_SESSION['username'];
// echo "<a href='index.php'>Home</a>";
 header("Location: clients.php");


}
 else {
 echo "<br/>Username o Password estan incorrectos.<br>";

 echo "<a href='main_login.php'>Volver a Intentarlo</a>";
}


/*LOGOUT*/
if ($_GET['logout']=="yes") {
		session_destroy();
		echo "<meta http-equiv='refresh' content='2; url=main_login.php' />";
		exit;
	}

?>





</body>
</html>