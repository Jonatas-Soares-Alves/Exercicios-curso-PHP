<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário</title>
</head>
<body>
    <?php

    /*
    if (isset($_GET['acao'])){
        $nome = $_GET['Nome'];
        $email = $_GET['Email'];

        echo $nome .'<br/>'. $email;
    }
    */

    if (isset($_POST['acao'])){
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];

        echo $nome .'<br/>'. $email;
    }

    if (isset($_POST['acao'])){
        foreach($_POST['numero'] as $key => $value){
            echo $value.' ';
        }
    }

    ?>

    <form method="post">
        <input type="text" name="Nome"/>
        <input type="text" name="Email"/>

        <input type="checkbox" name="numero[]" value="1">1
        <input type="checkbox" name="numero[]" value="2">2
        <input type="checkbox" name="numero[]" value="3">3
        <input type="checkbox" name="numero[]" value="4">4
        <input type="checkbox" name="numero[]" value="5">5

        <input type="submit" name="acao" value="Enviar"/>
    </form>
    
</body>
</html>