<?php

//Rafael Carvalhais e Rafael Luz//

$a=100;
$b=200;
$c=5;

$d=0;

$cont=0;  

while ($cont <=5 ) {
	if ($a > $b) {
	   $d = $a; 
	   $a = $b; 
	   $b = $d;
	}elseif ($b > $c) {
	   $d = $b;
	   $b = $c;
	   $c = $d; 
	}
	$cont++;
}

   echo($c . ' ' . $b . ' ' . $a);




?>