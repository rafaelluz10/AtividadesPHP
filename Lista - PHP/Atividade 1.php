<?php

 // Rafael Carvalhais e Rafael Luz // 

  $valor1 = 5;
  $valor2 = 10; 

  $soma = 0; 

  $soma = $valor1 + $valor2; 

  if ($soma > 20){
   $soma = $soma + 8;
    echo("A soma do número maior que 20, é: $soma");
  }
  
  elseif ($soma <=20) {
  	$soma = $soma - 5; 
  	echo("A soma do número menor ou igual a 20, é: $soma");
  }

?>