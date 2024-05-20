<?php
$media = 0; 
$nomes = array("Rafael", "Adriano", "José","Amanda","Trevor");
$notas = array(10,5,6,7,8);
foreach ($notas as $nota) {
    $nota = $notas[0]+$notas[1]+$notas[2]+$notas[3]+$notas[4] / 10;
    $media = $nota;
}
  echo "A média da classe foi:". $media;  
?>