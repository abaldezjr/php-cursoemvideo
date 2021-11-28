<?php

$nome = isset($_GET['nome']) ? $_GET['nome'] : "não informado";
$anoNascimento = isset($_GET['anonascimento']) ? $_GET['anonascimento'] : 0;
$sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "não informado";
echo $nome;
echo '<br>';
echo $anoNascimento;
echo '<br>';
echo $sexo;
echo '<br>';
$idade = date("Y") - $anoNascimento;
echo "$nome tem $idade anos e é $sexo";

?>
<p><a href="index.html">Voltar</a></p>