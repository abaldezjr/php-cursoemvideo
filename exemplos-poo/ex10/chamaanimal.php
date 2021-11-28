<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Mamifero.php';
            require_once 'Cachorro.php';
            require_once 'Lobo.php';
            
            //$animal = new Animal();
            $mamifero = new Mamifero();
            $mamifero->emitirSom();
            print_r($mamifero);
            
            $lobo = new Lobo();
            $lobo->emitirSom();
            print_r($lobo);
            
            $cachorro = new Cachorro();
            $cachorro->emitirSom();
            print_r($cachorro);
            
            ?>
        </pre>
    </body>
</html>
