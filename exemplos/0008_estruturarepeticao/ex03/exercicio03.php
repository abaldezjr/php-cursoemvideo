<?php

$inicio = $_GET['cinicio'];
$fim = $_GET['cfim'];
$incremento = $_GET['cincremento'];

$i = $inicio;
if($inicio > $fim) {
    while ($i >= $fim) {
        echo $i . '<br/>';
        $i -= $incremento;
    }
} else {
    while ($i <= $fim) {
        echo $i  . '<br/>';
        $i += $incremento;
    }
}