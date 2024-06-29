<?php

system("clear");

echo "Entre com os dados solicitados:\n\n";

$capitalInicial = (float)readline("Capital Inicial: ");
$taxaJuros = (float)readline("Taxa de juros anual (em %): ");
$qtdAnos = (int)readline("Tempo de aplicação (anos): ");

$capitalInicial = round($capitalInicial, 2);
$taxaJuros = round( $taxaJuros/100, 2);

// O (M)ontante resgatado ao final do periodo de aplicação 
// é dado por : M = Ci + J
// Onde Ci => Capital Inicial 
//      J => Juros simples acumulado no período
// Porem o Juros simples acumulado no período é
// calculado por : J = Ci x i x t
// Onde i => taxa de juros anual e t => qtd anos
// Assim :

$jurosPeriodo = $capitalInicial * $taxaJuros * $qtdAnos;

$resgateInvestimento = $capitalInicial + $jurosPeriodo;

$fmt = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY);
$fmt->setTextAttribute( $fmt::CURRENCY_CODE, 'R$' );
$fmt->setAttribute( $fmt::FRACTION_DIGITS, 2 );
$valor = $fmt->format($resgateInvestimento);

echo "\n\nApós {$qtdAnos} anos, o valor do investimento resgatado será de {$valor}\n\n";

