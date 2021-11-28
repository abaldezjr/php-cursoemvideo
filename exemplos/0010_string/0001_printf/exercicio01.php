<?php

$produto = "Leite";
$preco = 4.5;

echo "Produto : $produto, Preço : R$$preco";

echo '<br>';

echo "Produto : $produto, Preço : R$" . number_format($preco, 2, ",", ".");

echo '<br>';

printf("Produto : %s, Preço : R$%.2f", $produto, $preco);
