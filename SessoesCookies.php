<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['nome'] = 'Jônatas';
        $_SESSION['idade'] = '21';

        setcookie('tag', 'valor', time() + (60*60*24), '/');
    ?>
</body>
</html>
