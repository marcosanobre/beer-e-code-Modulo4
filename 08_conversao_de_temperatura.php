<?php
echo "\nInstruções de execução:";
echo "\n\nNa linha de execução deste programa, passe :\n\nos GRAUS (como Float) e\na forma de conversão:\nCF para Celsius -> Fahrenheit\nou FC para Fahrenheit -> Celsius\n\n\n";

if ($argc < 3) {
    die( "\n\n\nFaltam dados !!!!" );
};

$forma = $argv[2];
$pos = strpos("-CF-FC", $forma);

if ( $pos === false ) {
    die( "\n\n\nA forma de conversão tem que ser: CF ou FC !!!!\n\n" );
};

$graus = round( floatval( $argv[1] ), 2 );

if ($forma == 'CF') {
    $grausFahrenheit = round( ( $graus * 1.8 ) + 32, 2);
    echo "A conversão de {$graus} graus Celsius é de {$grausFahrenheit} graus Fahrenheit.\n\n";
} else {
    $grausCelsius = round( ( $graus - 32 ) / 1.8, 2);
    echo "A conversão de {$graus} graus Fahrenheit é de {$grausCelsius} graus Celsius.\n\n";
};



