<?php

system("clear");

echo "Entre com um NUMERO INTEIRO POSITIVO:\n\n";

$numero = (int)readline("NUMERO: ");
$original = $numero;

$calc = 1;
while ($numero > 1) {
    $calc *= $numero;
    $numero--;
};

echo "\n\nO Fatorial de {$original}, é : {$calc} !!!\n\n";
