<?php
 
//Rafael Carvalhais e Rafael Luz//
 
$mesa=1;
$lugares=6;
$reserva=0;
$valor=45;
$resto=0;
 
$reserva=($mesa*$lugares) * $valor;
$resto=240-$reserva;
 
if ($reserva ==0) {
	echo ('Saindo do Sistema...');
}
elseif ($reserva <= 60) {
	echo ('Você reservou ' . $reserva . ' lugares. Ainda restam '  . $resto . ' lugares');
}
 
elseif ($reserva <= 120) { 
	echo ('Você reservou ' . $reserva . ' lugares. Ainda restam '  . $resto . ' lugares');
}
 
elseif ($reserva <= 180) { 
	echo ('Você reservou ' . $reserva . ' lugares. Ainda restam '  . $resto . ' lugares');
}
 
else if ($reserva <= 240) {
   echo ('Você reservou ' . $reserva . ' lugares. Ainda restam '  . $resto . ' lugares');
}
 
else
	echo ('Não há lugares disponíveis');
 
 
?>