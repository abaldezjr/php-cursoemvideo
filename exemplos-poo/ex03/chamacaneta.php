<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Poo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <pre>
    <?php
    require_once "Caneta.php";
    $c1 = new Caneta("Bic cristal", "Azul", 0.5);

    var_dump($c1);

    //$c1->setPonta(0.5);
    //$c1->setModelo("Bic Cristal");
    //var_dump($c1);

    //echo "Modelo:{$c1->getModelo()} Ponta:{$c1->getPonta()}";
    ?>
    </pre>
</body>

</html>