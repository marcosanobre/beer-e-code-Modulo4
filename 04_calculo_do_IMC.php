<?php
echo "\nInstruções de execução:";
echo "\n\nNa linha de execução deste programa, passe :\n\na ALTURA M.CC (em metros) e\no PESO K.GR (em quilos)";

if ($argc < 3) {
    die( "\n\nFaltam dados" );
};

$altura = round( floatval( $argv[1] ), 2 );
$peso = round( floatval( $argv[2] ), 2 );

$imc = $peso / pow( $altura, 2 );
$imc = round( $imc, 2 );

if ($imc < 18.5) {
    $resultado = 'Magreza';
} else if ( ($imc >= 18.5) && ($imc <= 24.9) ) {
    $resultado = 'Peso Normal';
} else if ( ($imc >= 25) && ($imc <= 29.9) ) {
    $resultado = 'Sobrepeso';
} else if ( ($imc >= 30) ) {
    $resultado = 'Obsidade';
};

echo "\n\nVocê, com Peso: {$peso}Kgr e Altura {$altura}m\ntem IMC {$imc} que indica: {$resultado}\n\n";


