<?php

$ano = $_GET['ano'];
$idade = date("Y") - $ano;

if ($idade >= 18) {
    $votar = "já pode votar";
    $dirigir = "já pode dirigir";
} else {
    $votar = "não pode votar";
    $dirigir = "não pode dirigir";
}

echo "Com essa idade de $idade anos, você $votar e também $dirigir.";
