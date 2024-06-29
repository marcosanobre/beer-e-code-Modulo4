<?php

$numeroSecreto = 0;
$menorValor = 1;
$maiorValor = 100;
$terminaJogo = false;
$novaRodada = true;
$qtdRodadas = 0;

function apresentacao() {
    echo "\n\nEste é o Jogo de Advinhação.\n";
    echo     "============================\n\n";
    echo "Foi gerado aleatoriamente, um número entre 1 e 100.\n";
    echo "Você deverá inputar um 'Chute', e o jogo fará uma orientação.\n";
    echo "Ganha quem acerta com a menor quantidade de jogadas.\n\n";
    return;
};
function gerarNumeroAleatorio( $menorValor, $maiorValor ) {
    return random_int($menorValor, $maiorValor);
};

function numeroForMaiorOuMenorQueOValorPermitido($menorValor, $maiorValor, $numero) {
    return $numero > $maiorValor || $numero < $menorValor;
};

function chuteForInvalido( $numero ) {
    return intval( $numero ) > 0 ? true : false;
};

function verificaSeOChutePossuiUmValorValido( &$qtdRodadas, $menorValor, $maiorValor, $numeroSecreto, $chute ) {
    $numero = +$chute; // Tenta Converter o Chute para Número
/* 
    if( chuteForInvalido($numero) ) {
        echo "\n\nValor inválido !!!";
        sleep(5);
        return true;
    };
 */    
    $retorno = true;
    if ( numeroForMaiorOuMenorQueOValorPermitido($menorValor, $maiorValor, $numero) ) {
        echo "Valor inválido: CHUTE um Número entre {$menorValor} e {$maiorValor}.";
    } else if ( $numero === $numeroSecreto) {
        echo "\n\nVocê acertou. Parabéns !!!\n"; 
        echo "O Número Secreto era {$numeroSecreto}.\n\n" ;
        echo "(você deu {$qtdRodadas} chutes)";
        $retorno = false;
    } else if ( $numero > $numeroSecreto ) {
        echo "\n\nTente novamente - O Número Secreto é MENOR que {$numero}.";
    } else {
        echo "\n\nTente novamente - O Número Secreto é MAIOR que {$numero}.";
    };
    ++$qtdRodadas;
    sleep(3);
    return $retorno;
};


while ( ! $terminaJogo ) {
    $numeroSecreto = gerarNumeroAleatorio( $menorValor, $maiorValor );
    $chute = '';
    $qtdRodadas = 0;
    while ( $novaRodada ) {
        system('clear');
        apresentacao();
        echo "Entre com seu CHUTE (Nro Inteiro Positivo entre {$menorValor} e {$maiorValor})\n"; 
        echo "Ou 'FIM' para terminar\n";
        echo "Ou 'INICIO' para reiniciar uma nova rodada.\n\n";
        $chute = readline("CHUTE: ");
        if ( strtoupper( $chute ) == 'FIM' ) {
            $terminaJogo = true;
            $novaRodada = false;
        } else if ( strtoupper( $chute ) == 'INICIO' ) {
            $novaRodada = false;
        } else {
            $novaRodada = verificaSeOChutePossuiUmValorValido( $qtdRodadas, $menorValor, $maiorValor, $numeroSecreto, $chute );
        };
    };
};
system('clear');
die('Adeus !!!');



