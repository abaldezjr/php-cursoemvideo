<?php

function somaValor($x)
{
    $x += 2;
    echo $x;
}

$a = 3;
somaValor($a);

echo '<br/>';

echo $a;

echo '<br/>';

function somaReferencia(&$x)
{
    $x += 2;
    echo $x;
}

$a = 3;

somaReferencia($a);

echo '<br/>';

echo $a;

echo '<br/>';