<?php

function somaProcedimento($a, $b)
{
    echo $a + $b;
}

somaProcedimento(1, 2);

echo '<br>';

function soma($a, $b)
{
    return $a + $b;
}

echo soma(1, 2);

echo '<br>';

function somaMultiplosParametros()
{
    $p = func_get_args();
    $t = func_num_args();

    $s = 0;

    for ($i = 0; $i < $t; $i++) {
        $s += $p[$i];
    }

    return $s;
}

echo somaMultiplosParametros(1, 2, 3);
