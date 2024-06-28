<?php

$A = 10;

$B = 20;

echo "ANTES : \nvariavel A: {$A} \nvariavel B: {$B}\n\n";

$tmp = $A;

$A = $B;

$B = $tmp;

echo "DEPOIS : \nvariavel A: {$A} \nvariavel B: {$B}\n\n";

