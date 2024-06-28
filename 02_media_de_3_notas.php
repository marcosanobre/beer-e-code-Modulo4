<?php

if ($argc < 4) {
    die( "\n\nNa linha de execução deste programa, passe as 3 notas do Aluno !!!\n\n" );    
};

$nota1 = $argv[1];
$nota2 = $argv[2];
$nota3 = $argv[3];

$media = ( $nota1 + $nota2 + $nota3 ) / 3;
$media = round($media,2);

$resultado = ( $media < 7.0 ) ? "REPROVADO" : "APROVADO";

echo "\n\nO Aluno com as notas: {$nota1} , {$nota2} e {$nota3} \nteve Média {$media} e está {$resultado}.\n\n";

