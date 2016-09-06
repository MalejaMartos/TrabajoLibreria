<?php 
	$conexion = mysql_connect('localhost:80','root','andrez19') or die (mysql_error().' operacion de conexion fallida');
	mysql_select_db('bdlibro') or die (mysql_error().' operacion de seleccion fallida');

?>