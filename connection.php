<?php
	//mysql_connect('localhost','root','root'); /** Syntax ==> mysql_connect(SERVERNAME,USERNAME,PASSWORD); **/
	
	//mysql_select_db('basetarjetas'); /** This will select the databasename **/


	$host = 'localhost';
	$user = 'root';
	$pass = 'root';
	$database = 'basetarjetas';
	$tbl_name = "usuarios";

	$link=mysql_connect("$host","$user","$pass")or die ("error al acceder");
	mysql_select_db("$database",$link)or die ("Error al seleccionar la Base de Datos");

	$result = mysql_query("SELECT * FROM clientes")or die('Mi error es: '.mysql_error()); 