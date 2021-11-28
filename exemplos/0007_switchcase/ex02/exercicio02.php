<?php

$dia = isset($_GET['tdia']) ? $_GET['tdia'] : 0;

switch ($dia) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo 'Vá estudar!';
        break;
    case 7:
    case 8:
        echo 'Descanse.';
        break;
    default:
        echo 'Dia inexistente';
}

?>
<p><a href="./index.html">Voltar</a></p>