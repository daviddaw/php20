?>php

// llamada al fichero de coneccion de base de datos

	require('coneccion.php');
	
	$nombreDpto=$_REQUEST['nombre'];
	
	$sql1="select cod_dpto from departamento where nombre_dpto='$nombre'";
	
?>