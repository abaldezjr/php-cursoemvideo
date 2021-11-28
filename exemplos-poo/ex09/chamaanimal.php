<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';

            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'GoldFish.php';
            require_once 'Arara.php';

            $m1 = new Mamifero();
            $m1->setPeso(20);
            $m1->setIdade(8);
            $m1->setMembros(4);
            $m1->locomover();
            $m1->emitirSom();
            print_r($m1);

            $r1 = new Reptil();
            $r1->setPeso(3);
            $r1->setIdade(1);
            $r1->setMembros(4);
            $r1->locomover();
            $r1->emitirSom();
            print_r($r1);

            $p1 = new Peixe();
            $p1->setPeso(0.3);
            $p1->setIdade(0.2);
            $p1->setMembros(2);
            $p1->locomover();
            $p1->emitirSom();
            print_r($p1);

            $a1 = new Ave();
            $a1->setPeso(2);
            $a1->setIdade(2.5);
            $a1->setMembros(2);
            $a1->locomover();
            $a1->emitirSom();
            print_r($a1);

            $canguru = new Canguru();
            $canguru->setPeso(20);
            $canguru->setIdade(8);
            $canguru->setMembros(4);
            $canguru->locomover();
            $canguru->emitirSom();
            print_r($canguru);

            $cachorro = new Cachorro();
            $cachorro->setPeso(20);
            $cachorro->setIdade(8);
            $cachorro->setMembros(4);
            $cachorro->locomover();
            $cachorro->emitirSom();
            print_r($cachorro);

            $cobra = new Cobra();
            $cobra->setPeso(20);
            $cobra->setIdade(8);
            $cobra->setMembros(4);
            $cobra->locomover();
            $cobra->emitirSom();
            print_r($cobra);

            $tartaruga = new Tartaruga();
            $tartaruga->setPeso(20);
            $tartaruga->setIdade(8);
            $tartaruga->setMembros(4);
            $tartaruga->locomover();
            $tartaruga->emitirSom();
            print_r($tartaruga);

            $goldFish = new GoldFish();
            $goldFish->setPeso(20);
            $goldFish->setIdade(8);
            $goldFish->setMembros(4);
            $goldFish->locomover();
            $goldFish->emitirSom();
            print_r($goldFish);

            $arara = new Arara();
            $arara->setPeso(20);
            $arara->setIdade(8);
            $arara->setMembros(4);
            $arara->locomover();
            $arara->emitirSom();
            print_r($arara);
            ?>
        </pre>
    </body>
</html>
