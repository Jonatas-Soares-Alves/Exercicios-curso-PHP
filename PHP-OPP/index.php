<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index PHP OOP</title>
</head>
<body>
    <?php
        include('Exemplos.class.php');

        //=============USE===============
        use \Testes\Pai;
        use \Testes\PreSet as Pre;

        //===========Variável e constante==============
        $objeto = new \Testes\Exemplo();

        //$objeto->varPriv = 'Var Privado'; <--------- Fatal Error Line (Private Method)
        $objeto->varPublic = 'Var Publico';

        echo $objeto->varPublic .'<hr/>';
        echo $objeto::ValorConstante;
        //===========Variável e constante==============

        $pessoa1 = new \Testes\Pessoa();
        $pessoa2 = new \Testes\Pessoa();

        //=====Set e print do objeto 1=====
        $pessoa1->SetNome('Ana');
        $pessoa1->SetIdade(27);
        $pessoa1->SetAltura(1.65);

        $pessoa1->MostrarTudo();

        //=====Mudança e print do objeto 1=====
        $pessoa1->Envelhecer(3);
        $pessoa1->Crescer(0.10);

        $pessoa1->MostrarTudo();

        //=====Set e print do OBJETO 2=====
        $pessoa2->SetNome('João');
        $pessoa2->SetIdade(56);
        $pessoa2->SetAltura('1.78');

        $pessoa2->MostrarTudo();

        //=====Set e print do objeto PAI=====
        $pai = new Pai();

        $pai->Falar();
        $pai->MostrarFalarBaixo();
        //$pai->Cochichar(); <--------- Fatal Error Line (Private Method)

        //=====Objeto com método Construct=====
        $constr = new Pre('Info-1','Info-2');

        echo '<br/><hr>'. $constr->getSet1();
        echo '<br/>'.     $constr->getSet2(). '<hr>';
    ?>
    
</body>
</html>