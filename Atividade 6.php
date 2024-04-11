<?php

//Rafael Carvalhais e Rafael Luz//


function calcularMedia($nota1, $nota2) {
    return ($nota1 + $nota2) / 2;
}


function obterMensagem($media) {
    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 4 && $media < 7) {
        return "Exame";
    } else {
        return "Reprovado";
    }
}

$total_alunos = 6;
$total_aprovados = 0;
$total_exame = 0;
$total_reprovados = 0;
$soma_notas = 0;

for ($i = 1; $i <= $total_alunos; $i++) {
    echo "Aluno $i<br>";
    $nota1 = 10;
    echo "Primeira nota: $nota1<br>";
    $nota2 = 5;
    echo "Segunda Nota: $nota2<br>";


    $media = calcularMedia($nota1, $nota2);
    $mensagem = "Aprovado";

   
    if ($mensagem == "Aprovado") {
        $total_aprovados++;
    } elseif ($mensagem == "Exame") {
        $total_exame++;
    } else {
        $total_reprovados++;
    }

    $soma_notas += $media;

 
    echo "Média: $media, Situação: $mensagem<br>";
}


$media_classe = $soma_notas / $total_alunos;


echo "Resultados Finais:<br>";
echo "Total de alunos aprovados: $total_aprovados<br>";
echo "Total de alunos de exame: $total_exame<br>";
echo "Total de alunos reprovados: $total_reprovados<br>";
echo "Média da classe: $media_classe<br>";

?>