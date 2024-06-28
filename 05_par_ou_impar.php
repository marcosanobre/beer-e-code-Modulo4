<?php

if ($argc < 2) {
    die( "\n\nNa linha de execução deste programa, passe um Número Inteiro Positivo !!!\n\n" );
};

$numero = intval( $argv[1] );

$resultado = ( pow(-1, $numero) > 0 ) ? 'Par' : 'Impar' ;

echo "\n\nO número {$numero} é {$resultado} !!!\n\n";
    
