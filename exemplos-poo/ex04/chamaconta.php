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
    require_once "ContaBanco.php";
    $contaJubileu = new ContaBanco();
    $contaJubileu->abrirConta("CC");
    $contaJubileu->setNumConta(1111);
    $contaJubileu->setDono("Jubileu");
    $contaJubileu->depositar(500);
    $contaJubileu->pagarMensal();
    $contaJubileu->sacar(538);
    $contaJubileu->fecharConta();

    $contaCreuza = new ContaBanco();
    $contaCreuza->abrirConta("CP");
    $contaCreuza->setNumConta(2222);
    $contaCreuza->setDono("Creuza");
    $contaCreuza->depositar(600);
    $contaCreuza->sacar(100);
    $contaCreuza->pagarMensal();
    $contaCreuza->sacar(1000);
    $contaCreuza->sacar(630);
    $contaCreuza->fecharConta();

    var_dump($contaJubileu);
    var_dump($contaCreuza);
    
    ?>
    </pre>
</body>

</html>