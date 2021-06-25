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

        $objeto = new Exemplo();

        //$objeto->varPriv = 'Var Privado';
        $objeto->varPublic = 'Var Publico';

        //echo $objeto->varPriv;
        echo $objeto->varPublic .'<hr/>';

        $pessoa1 = new Pessoa();
        $pessoa2 = new Pessoa();

        $pessoa1->SetNome('Ana');
        $pessoa1->SetIdade(27);
        $pessoa1->SetAltura(1.65);
        $pessoa1->MostrarTudo();

        $pessoa1->Envelhecer(3);
        $pessoa1->Crescer(0.10);
        $pessoa1->MostrarTudo();

        $pessoa2->SetNome('João');
        $pessoa2->SetIdade(56);
        $pessoa2->SetAltura('1.78');
        $pessoa1->MostrarTudo();
    ?>
    
</body>
</html>