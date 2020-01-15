<?php

	// asignacion();
	echo "Juagada ";
	// foreach(jugada() as $clave=>$valor){
		// echo $valor." ";
	// }
	
	foreach(jugadores() as $clave=>$valor){
		
		echo $clave;
		for($i=0;$i<count(carton());$i++){
			echo $i;
		}
		
	}
?>

<?php

	
	//funcion de jugadores
	function jugadores(){
	
		$jugadores=array("jugador1"=>array(carton(),carton(),carton()),"jugador2"=>array(carton(),carton(),carton()),"jugador3"=>array(carton(),carton(),carton()),"jugador4"=>array(carton(),carton(),carton()));
		
		
		return $jugadores;
	}


	//asginamos a cada posicion del cartón un numero aleatorio de 1 a 60 y no haya repetidos
	function carton(){
		$generarNum=0;
		$arrayCarton=array();
		for($i=1;$i<=15;$i++){
			$generarNum=rand(1,60);
				if(in_array($generarNum, $arrayCarton)){
					while(in_array($generarNum, $arrayCarton)){
							$generarNum=rand(1,60);
						}
						$arrayCarton[$i]=$generarNum;
				}else{
					
					$arrayCarton[$i]=$generarNum;
				}
		}
		return $arrayCarton;
	
	}
	
	
	
	//funcion que asigna a cada jugador un carton de 15 numeros
	// function asignacion(){
	
		// foreach(jugadores() as $clave=>$valor){
			// echo $clave." ";
			// foreach(carton() as $claveCarton=>$valorCarton){
				// $clave=$valorCarton;
				// echo $clave." ";
			// }
			// echo "<br>";
		// }
	
	// }
	
	//genera la jugada ganadora sin numeros repetidos
	function jugada(){
	
		$generaNum=0;
		$jugada=array();
	
		for($i=0;$i<15;$i++){
			$generaNum=rand(1,60);
			if(in_array($generaNum, $jugada)){
			
				while(in_array($generaNum, $jugada)){
					$generaNum=rand(1,60);
				}
				$jugada[$i]=$generaNum;
			}else{
				$jugada[$i]=$generaNum;
			}
		
		
		}
	
		return $jugada;
	}
?>