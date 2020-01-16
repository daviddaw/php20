<?php

	$servername='localhost';
	$username='root';
	$password='rootroot';
	$dbname='empleadonn';
	
	
	$conn=mysqli_conecct($servername,$username,$password,$dbname);
	
	if(!$conn){
		
		echo "Coneccion con exito";
	
	}

	echo "Coneccion erronea ".mysqli_error();

?>