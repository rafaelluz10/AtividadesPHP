<?php

// Rafael Carvalhais e Rafael Luz // 

$valor = 50;

if ($valor % 10 == 0) {
 	echo ('O valor ' . $valor . ' é divisível por 10 ');
 } 

elseif ($valor % 5 == 0) { 
	echo ('O valor '. $valor . ' é divisível por 5 ');
}

elseif ($valor % 2 == 0){
	echo ('O valor '. $valor . ' é divisível por 2 ');
}

else{
   echo ('O valor '. $valor . ' não é divisível por 10, 5 e 2 ');
}


?>