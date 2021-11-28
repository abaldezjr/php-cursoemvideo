<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto youtube!</title>
    </head>
    <body>
        <pre>
        <?php
        
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            
            $g1 = new Gafanhoto("Jubileu", 33, "M", "jubileu");
            $g2 = new Gafanhoto("Creuza", 31, "F", "creuza");
            $g3 = new Gafanhoto("Alexandre", 33, "M", "baldez");
            
            print_r($g1);
            print_r($g2);
            
            $video1 = new Video("Aula 1 de POO");
            $video2 = new Video("Aula 2 de POO");
            $video3 = new Video("Aula 15 de HTML 5");
        
            $videos = array($video1, $video2);
            
            print_r($video1);
            print_r($video2);
            print_r($video3);
            
            $v1 = new Visualizacao($g1, $video1);
            $v1->avaliar();
           
            print_r($v1);
            
            $v2 = new Visualizacao($g2, $video1);
            $v2->avaliarNota(3);
            
            print_r($v2);
            
            $v2 = new Visualizacao($g2, $video1);
            $v2->avaliarNota(3);
            
            print_r($v2);
            
            $v3 = new Visualizacao($g3, $video1);
            $v3->avaliarPorcentagem(85);
            
            print_r($v3);
        
        ?>
        </pre>
    </body>
</html>
