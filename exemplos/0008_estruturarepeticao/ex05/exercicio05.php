<?php

$fatorial = $_GET['cfatorial'];

$i = $fatorial == 0 ? 1 : $fatorial;
$resultado = 1;
do {
    $resultado *= $i;
    $i--;
} while ($i > 1);

echo $fatorial . "! = " . $resultado;
?>

<p><a href="index.php">Voltar</a></p>