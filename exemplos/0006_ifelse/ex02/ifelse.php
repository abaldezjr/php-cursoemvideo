<?php

$ano = $_GET['ano'];
$idade = date('Y') - $ano;

$tipoVoto = 'voto obrigatório';

$naoVota = $idade < 16;
$votoOpcional = ($idade >= 16 && $idade < 18) || ($idade >= 65);

if ($naoVota) {
    $tipoVoto = 'não vota';
} elseif ($votoOpcional) {
    $tipoVoto = 'voto opcional';
} 

echo "Para a idade de $idade anos, $tipoVoto.";
