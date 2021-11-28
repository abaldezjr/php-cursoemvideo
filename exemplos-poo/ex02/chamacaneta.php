<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Formulario exercicio 1 - Raiz Quadrada</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <pre>
            <?php
            require_once "Caneta.php";
            $c1 = new Caneta();
            $c1->modelo = "Bic cristal";
            $c1->cor = "azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 90;
            $c1->tampar();
            var_dump($c1);
            $c1->rabiscar();
            ?>
        </pre>
    </body>

</html>