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
    <h1>Projeto controle remoto</h1>
            <?php
            require_once "ControleRemoto.php";
            $cr = new ControleRemoto();
            $cr->aumentarVolume();
            $cr->diminuirVolume();
            $cr->abrirMenu();
            echo '<br/>';
            $cr->ligar();
            $cr->aumentarVolume();
            $cr->abrirMenu();
            echo '<br/>';
            $cr->ligar();
            $cr->diminuirVolume();
            $cr->abrirMenu();
            
            
            
            ?>
        </pre>
    </body>

</html>