<?php

system("clear");

echo "Entre com os dados solicitados:\n\n";


//Função recursiva para calcular o MDC (máximo divisor comum)
function mdc($x,$y){
	$a = max($x,$y);
	$b = min($x,$y);
	if($a%$b == 0){
		return $b;
	}else{
		return mdc($b, ($a%$b) );
	};
};


/*
 CÁLCULO DO M.M.C EFICIENTE (mínimo múltiplo comum)
 fonte:wikipedia
 Regra prática:
	mmc(x,y) = (($x*$y)/(mdc($x,$y)));
*/
function mmc($x,$y){
	return (($x*$y)/(mdc($x,$y)));
};

$numero01 = (int)readline("Primeiro Número: ");

$numero02 = (int)readline("Segundo Número: ");

$mdc = mdc($numero01, $numero02);

$mmc = mmc($numero01, $numero02);

echo "\n\nDado os números {$numero01} e {$numero02} temos: \n\n";
echo "MDC( {$numero01}, {$numero02} ) = {$mdc}\ne\n";
echo "MMC( {$numero01}, {$numero02} ) = {$mmc}\n\n";

