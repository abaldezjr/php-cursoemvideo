<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';
            
            $p1 = new Pessoa();
            $p1->setNome("Alexandre Baldez Jr.");
            $p1->setIdade(33);
            $p1->setSexo("M");
            
            $p2 = new Aluno();
            $p2->setNome("Fernanda Lopes");
            $p2->setIdade(30);
            $p2->setSexo("F");
            $p2->setMatricula(23456);
            $p2->setCurso("Ciencias biológicas");
            $p2->fazerAniversario();
            $p2->pagarMensalidade();
            
            $p3 = new Visitante();
            $p3->setNome("Visitante 1");
            $p3->setIdade(18);
            $p3->setSexo("F");
            
            $p4 = new Bolsista();
            $p4->setNome("Rodrigo Arvoredo");
            $p4->setIdade(30);
            $p4->setSexo("M");
            $p4->setMatricula(54321);
            $p4->setCurso("Engenheiro de computação");
            $p4->fazerAniversario();
            $p4->pagarMensalidade();
            $p4->renovarBolsa();
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            
            ?>
        </pre>
    </body>
</html>
