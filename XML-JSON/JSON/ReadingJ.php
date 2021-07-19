<?php
    //========================== Lendo JSON ==========================
    $json = '{"a":1, "b":{"nome":"felipe", "idade":37}, "c":3}';

    $objJson = json_decode($json); //<-- armazena como objeto
    $arrJson = json_decode($json, true); //<-- armazena como array

    echo 'Objeto: '.$objJson->a;
    echo '<br>';
    echo 'Array: '.$arrJson["a"];
    echo '<hr>';

    echo 'Somando: '.$arrJson['a']+$arrJson['c'];

    echo '<hr>';
    echo 'Consultando OBJ: '.$objJson->b->nome. '<br>';
    echo 'Consultadno ARR: '.$arrJson['b']['idade']. '<br>';

    //========================== Escrevendo JSON ==========================
    /*
    $infoArr = ['nome'=>'Joe', 'trabalho'=>'Cozinheiro'];

    $infoJson = json_encode($infoArr); //Transforma um array em JSON e armazena.
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    {
        //VVVVVVVVVVVVVV Problem: Isn't reading the JSON file. VVVVVVVVVVVVVV
        $(function(){
            $.ajax({
                url:'jsonRegistrado.php',
                dataType:'json'
            }).done(function(data){
                console.log(data.nome);
                alert(data.nome);
            })
        })
        //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    }
    </script>

</body>
</html>