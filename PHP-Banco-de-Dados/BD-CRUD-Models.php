<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados Modelo</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            color: white;
        }
        body{
            width: 100%;
            min-height: 100%;
            background-color: rgb(50, 60, 60);
        }
        div{
            padding: 10px;
        }

    </style>
</head>
<body>
    <div>

    <?php

        //===============================Conectando ao Banco de Dados===============================
        define('HOST', 'localhost');
        define('DB', 'dankicode');
        define('USER', 'root');
        define('PASS', '');

        try{
            $pdo = new PDO('mysql:host='.HOST.'; dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo '<h1>Desculpe, Um erro ocorreu ao tentar conectar ao banco de dados...</h1>';
        }
        //===============================Conectando ao Banco de Dados===============================

        $sql = $pdo->prepare("SELECT titulo, texto, `categoria`.`nome` FROM `post` INNER JOIN `categoria` WHERE `post`.`idCategoria` = `categoria`.`id` ORDER BY `categoria`.`nome` ASC");
        $sql->execute();

        $dados = $sql->fetchAll(PDO::FETCH_ASSOC); 
        //PDO::FETCH_ASSOC -> Trás o array com os Nomes das colunas ao invés de (Nomes e numerados)

        /*
        // Para ver o que foi retornado
        echo '<pre/>';
        print_r($dados);
        echo '<pre>';
        */

        foreach($dados as $key => $info){
            
    ?>
        <h3><?php echo $info['titulo']; ?></h3>
        <h6><?php echo $info['nome']; ?></h6>
        <p><?php echo $info['texto']; ?></p><br>
        <hr><br>
    <?php
        }

        if(isset($_POST['btInserir'])){
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $texto = $_POST['texto'];

            $inserir = $pdo->prepare("INSERT INTO `post` (`id`, `idCategoria`, `titulo`, `texto`) VALUES (NULL,?,?,?)");
            $inserir->execute(array($categoria, $titulo, $texto));
        }
    ?>

    <h1>Inserir matéria:</h1>

    <form method="post">

    Titulo: <input type="text" name="titulo" style="background:black;"><br>

    Categoria: <br>
    <input type="radio" id="GRL" name="categoria" value="GRL">
    <label for="GRL">Geral</label><br>
    <input type="radio" id="ESP" name="categoria" value="ESP">
    <label for="ESP">Esportes</label><br>
    <input type="radio" id="VGS" name="categoria" value="VGS">
    <label for="VGS">Video Games</label><br>

    <textarea name="texto" cols="150" rows="15" style="vertical-align: top; background:black;"></textarea>
    <br>

    <input type="submit" name="btInserir" value="Inserir Dados" style="color:black;">
    </form>

    </div>
</body>
</html>
