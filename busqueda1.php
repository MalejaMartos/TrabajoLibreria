<?php  
	require_once('conexion.php');
	$entrada = $_POST['usuario1'];

	$consulta = "Select li.titulo, a.nombre from (autor as a join autor_libro as al on a.idautor=al.autor_id) 
	join libro as li on al.libro_id=li.isbn where li.titulo REGEXP '^.*".$entrada.".*$' or a.nombre REGEXP '^.*".$entrada.".*$';";
	$respuesta = mysql_query($consulta) or die ("consulta no exitosa");
	

	while($resultado = mysql_fetch_array($respuesta)){
		echo $resultado['1'].' -- '.$resultado['0'].'<br>';
	}

?>