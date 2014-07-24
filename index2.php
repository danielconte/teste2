<?php 
	function media($valores) {
		if ( is_array($valores)) {
			$qtde = count($valores);
			$soma = 0;
			foreach ($valores as $valor) {
				$soma =+ $valor;
			}
			return $soma/$qtde;
		} else {
			return $valores;
		}
	}
	
	
	function mediana($valores) {
		if (is_array($valores)) {
			sort($valores);
			$numElementos = count($valores);
			if ($numElementos%2 == 1) {
				$indice = ($numElementos/2);
				return  $valores[$indice];
			} else {
				$indice1 = ($numElementos-1)/2;
				$indice2 = ($numElementos+1)/2;
				$valor1 = $valores[$indice1];
				$valor2 = $valores[$indice2];
				echo "v1".$valor1."v2".$valor2;
				return media(array($valor1,$valor2));				
			}			
		} else {
			return $valores;
		}
	}
	
	$vetor = array(8,3,1,5,4,1,10,0,1,0);
	echo "media1 ".  media($vetor)."<br />";
	echo "mediana ".  mediana($vetor)."<br />";
	$vetor = null;
	$vetor = 17;
	echo "media2 ". media($vetor);
	
?>
























