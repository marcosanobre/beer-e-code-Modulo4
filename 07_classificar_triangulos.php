<?php
/*
Um triângulo é chamado de equilátero se todos os lados possuem a mesma medida.
Um triângulo é chamado de isósceles se dois lados possuem a mesma medida.
Um triângulo é chamado de escaleno se todos os lados possuem medidas diferentes.
*/

if ($argc < 4) {
    die( "\n\nNa linha de execução deste programa, passe as medidas dos 3 lados do Triangulo !!!\n\n" );    
};

$lado1 = $argv[1];
$lado2 = $argv[2];
$lado3 = $argv[3];

if ($lado1 == $lado2 && $lado1 == $lado3) {
    $triangulo = 'Equilátero';
} else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    $triangulo = 'Isóceles';
} else if ($lado1 != $lado2 && $lado2 != $lado3 && $lado3 != $lado1) {
    $triangulo = 'Escaleno';
};

echo "\n\nDada as medidas: Lado-1 {$lado1}, Lado-2 {$lado3}, Lado-3 {$lado3}, o Triangulo é considerado: {$triangulo}.\n\n";
