<?php
	session_start();
?>
<?php 
include "connection.php"; /** calling of connection.php that has the connection code **/ 

$id = $_GET['id']; /** get the student ID ***/

mysql_query("DELETE FROM clientes where IdCliente = '$id'"); /** execute the sql delete code **/

header("Location: clients.php"); /** redirect to delete.php **/


