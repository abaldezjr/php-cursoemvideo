<?php

$tabuada = $_GET['ctabuada'];

for ($i = 0; $i <= 10; $i++) {
    echo "$i x $tabuada = " . $i * $tabuada;
    echo '<br/>';
}
?>

<p><a href="index.php">Voltar</a></p>