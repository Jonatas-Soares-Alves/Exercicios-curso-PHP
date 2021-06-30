<?php
    $pdo = new PDO('mysql:host=localhost;dbname=dankicode' , 'root', '');

    // Cria uma variável para receber o comando.

    /*
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Gustavo Pereira Junior','2001-05-15','M','74.25','1.87','Estados Unidos', 'HH:MM:SS')");
    */

    // Executa o comando.
    // $sql->execute();

    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $nasc = $_POST['nasc'];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $pais = $_POST['pais'];
        $hora = date('H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?,?,?,?,?)");

        $sql->execute(array($nome, $nasc, $sexo, $peso, $altura, $pais, $hora));

        echo 'Comando executado com sucesso!';
    }

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banco de Dados PHP</title>
    </head>
    <body>
        <form method='post'>
            Nome: <input type="text" name="nome" required /> <br>

            Data de Nascimento: <input type="date" name="nasc" required /> <br>

            Sexo: <br>
                <input type="radio" id="Masculino" name="sexo" value="M" required />
                <label for="Masculino">Masculino</label> <br>

                <input type="radio" id="Feminino" name="sexo" value="F" />
                <label for="Feminino">Feminino</label> <br>

            Peso: <input type="text" name="peso" required /> <br>

            Altura: <input type="text" name="altura" required /> <br>

            Nascionalidade: <input type="text" name="pais" required /> <br>

            <input type="submit" name="acao" value="Enviar">

        </form>
    </body>
    </html>