<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
        session_start();
        unset($_SESSION['nome']);
        
        echo $_SESSION['nome']. ' '. $_SESSION['idade'];

        setcookie('tag', 'valor', time() - (60*60*24), '/');
        session_destroy();
    ?>
</body>
</html>
