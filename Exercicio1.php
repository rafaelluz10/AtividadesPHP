<?php
 
//Exercicio 1 - MÉDIA DA SALA E ALUNO COM MAIOR NOTA

 //Rafael Luz e Rafael Carvalhais

$media = 0; 
$nomes = array("Rafael", "Adriano", "José","Amanda","Trevor", "Eduardo", "Maria", "João", "Gabriela", "Silvana");
$notas = array(10,5,6,7,8,9,5,7,4,8);
foreach ($notas as $nota) {
    $nota = $notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9];
    $nota1 = $nota / 10; 
    $media = $nota1;
}
  echo "A média da classe foi:". $media ."</br>";  
 
$nota_final = max($notas);
  
$NotaAluno = array_search(max($notas), $nomes);
 
echo ("</br>A maior nota entre os alunos, pertence a: $nomes[$NotaAluno] com $nota_final");
  
?>