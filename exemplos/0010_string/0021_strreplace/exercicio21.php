<?php

$frase = "Eu Odeio PHP";
$frase = str_replace("odeio", "amo", $frase);
echo $frase;

echo '<br/>';

$frase = str_ireplace("odeio", "amo", $frase);
echo $frase;