<?php
 
//Rafael Luz e Rafael Carvalhais
 
$num = array (10, -5, 8, 11, -4, -17, 14, 18, -21, -3);
 
for ($i=0; $i < 10; $i++) { 
}
 
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;
 
    foreach ($num as $numero) {
      if ($numero < 0) {
        $negativos++;
    }   elseif ($numero > 0) {
          $positivos++;
    }
      if ($numero % 2 == 0) {
        $pares++;
    }  else {
          $impares++;
    }
}
    echo "<br/>Quantidade de números negativos: " . $negativos;
  	echo "<br/>Quantidade de números positivos: " . $positivos;
    echo "<br/>Quantidade de números paress: " . $pares;
    echo "<br/>Quantidade de números impares: " . $impares;
?>