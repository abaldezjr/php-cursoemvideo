<?php

$numero = $_GET['tnumero'];
$operacao = $_GET['oper'];

switch ($operacao) {
    case 'dobro':
        $result = $numero * 2;
        break;
    case 'cubo':
        $result = pow($numero, 3);
        break;
    case 'raiz':
        $result = sqrt($numero);
        break;
}

echo "Número:$numero, Operação: $operacao, Resultado: $result";

?>
<p><a href="./index.html">Voltar</a></p>