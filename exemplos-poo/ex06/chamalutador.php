<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $prettyBoy = new Lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $putscript = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $snapshadow = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $deadcode = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $ufocobol = new Lutador("UFO cobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $nerdaart = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            //$lutadores = array($prettyBoy, $putscript, $snapshadow, $deadcode, $ufocobol, $nerdaart);
            
            $uec01 = new Luta();
            
            $uec01->marcarLuta($prettyBoy, $ufocobol);
            
            $uec01->lutar();
            
            //$prettyBoy->status();
            //$putscript->status();
            
            ?>
        </pre>
    </body>
</html>
