<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos da aula</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: rgb(50, 60, 60);
            color: white;
        }

        p{
            font-weight: normal;
            font-size: 15px;
        }
    </style>
</head>
<body>

    <h1>Variáveis e Contatenação:</h1>
    <?php
        /*======Variáveis======*/
        $nome = 'Guilherme';
        $idade = 23;
        $bool = true;
        $double = 14.30;

        /*======Contatenação com aspas simples======*/
        echo 'Meu nome é <strong>'.$nome.'</strong> e eu tenho <strong>'.$idade.'</strong> anos de idade. "Verdadeiro"';

        /*======Contatenação com aspas duplas======*/
        echo "<br/> Meu nome é <strong>$nome</strong> e eu tenho <strong>$idade</strong> anos de idade. \"Verdadeiro\"";

        echo '<br/> Boleano: '.$bool;
        echo '<br/> Double: '.$double;
        /*======Variáveis======*/
    ?>
    <hr>

    <h1>Constantes:</h1>
    <?php
        /*======Constantes======*/
        define('NOME', 'João');

        echo 'Nome gravado na constante: '.NOME
        /*======Constantes======*/
    ?>
    <hr>


    <h1>Arrays:</h1>
    <?php
        /*======Arrays======*/
        $nomes = array('Gustavo', 'Joana', 'Matheus');

        echo 'Nomes 0 => '.$nomes[0];
        echo '<br/> Nomes 1 => '.$nomes[1];
        echo '<br/> Nomes 2 => '.$nomes[2];
    ?>
    <?php
        $numeros[] = '1';
        $numeros[] = '2';

        $numeros[5] = '6';
        $numeros[100] = '101';

        echo '<br/><br/> Numero 0 => '.$numeros[0];
        echo '<br/> Numero 1 => '.$numeros[1];
        echo '<br/> Numero 5 => '.$numeros[5];
        echo '<br/> Numero 100 = > '.$numeros[100];
        /*======Arrays======*/
    ?>
    <hr>

    <h3>Array "Dicionário":</h3>
    <?php
        /*======Dicionário======*/
        $pessoa['nome'] = 'Kenji';
        $pessoa['idade'] = '15';
        $pessoa['cidade'] = 'Boston';
        $pessoa['existe'] = true;
        /*======Dicionário======*/

        echo 'Nome da pessoa: '.$pessoa['nome'];
        echo '<br/> Idade da pessoa: '.$pessoa['idade'];
        echo '<br/> Cidade de pessoa: '.$pessoa['cidade'];
        echo '<br/> Essa pessoa existe? '.$pessoa['existe'];
        
    ?>
    <hr>

    <h3>Array Multidimencional</h3>
    <?php
        //=========Loop ARRAY MULTI Other==========
        $arrMulti = ['Nome' => ['Guilherme', 'Joao'], 'Idade' => [35, 15]];

        echo 'Meu nome é <strong>'.$arrMulti['Nome'][0].'</strong> e tenho <strong>'.$arrMulti['Idade'][0].'</strong> anos de idade.'
    ?>
    <hr>

    <h1>Condições:</h1>
    <h3>if</h3>
    <?php
        //=========Condição if==========
        $var1 = 'A';
        $var2 = 'B';
        $var3 = 'C';

        if ($var1 == $var2 and $var1 == $var3 and $var2 == $var3){
            echo '<div style= "width: 100px; height: 100px; background: green;"></div>';
        }else if($var1 == $var2 or $var1 == $var3 or $var2 == $var3){
            echo '<div style= "width: 100px; height: 100px; background: blue;"></div>';
        }else{
    ?>
            <div style= "width: 100px; height: 100px; background: red;"></div>
    <?php
            }
        //=========Condição if==========
    ?>
    <hr>

    <h3>Switch</h3>
    <?php
        //=========Switch==========
        $testeSwitch = 'Jônatas';
        switch($testeSwitch){
            case 'Jônatas':
                echo 'Jônatas é um nome bonito! Já leu ele ao contrário?';
                break;

            case 'João':
                echo 'Esse nome é bem... Comum.';
                break;
        }
        //=========Switch==========
    ?>
    <hr>

    <h1>Loops:</h1>

    <h3>FOR:</h3>
    <?php
        //=========Loop FOR==========
        for($cont=0; $cont<10; $cont++){
            echo $cont.', ';
        }
    ?>

    <h3>WHILE:</h3>
    <?php
        //=========Loop WHILE==========
        $cont=0;
        while($cont<10){
            echo $cont.', ';
            $cont++;
        }
    ?>

    <h3>WHILE INFINITO</h3>
    <?php
        $cont = 0;

        while(TRUE){
            echo $cont.', ';
            $cont++;

            if($cont > 10){
                break;
            }
        }
    ?>


    <h3>DO WHILE:</h3>
    <?php
        //=========Loop DO WHILE==========
        $cont=0;
        do{
            echo $cont.', ';
            $cont++;
        }while($cont<10)
    ?>

    <h3>FOREACH (ARRAY):</h3>
    <?php
        //=========Loop FOREACH==========
        $arr = array('NO1', 'NO2', 'NO3', 'NO4', 'NO5', 'NO6');
        foreach($arr as $key => $value){
            echo $key.' => '. $value.' || ';
        }

        //=========Loop FOREACH Other==========
        $total = count($arr);
        echo '</br>';

        for($i=0; $i<$total; $i++){
            echo $i.' => '. $arr[$i].' || ';
        }
    ?>
    <hr>

    <h1>Funções:</h1>
    <?php
        //=========Função 1==========
        function mostrarDados($nome, $idade){
            echo "Meu nome é $nome e eu tenho $idade anos.";
        }
        //=========Função 1==========

        //=========Função 2==========
        function soma($n1 = 0, $n2 = 0){
            return $n1 + $n2;
        }
        //=========Função 2==========

        mostrarDados('Jefeson', 25);

        echo '<br/>'.soma();
        echo '<br/>'.soma(10, 15);

    ?>
    <hr>

    <h3>Date:</h3>
    <?php
        //=========Timezone e Formato==========
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d/m/Y H:i:s', time()+(60 * 2) );
        echo $data;
        //=====================================
    ?>
    <hr>

    <h3>String:</h3>
    <?php
        //=========Funções básicas de String==========
        $listaEscrita = 'A1 A2 A3 A4 A5 A6';

        //=========Separa String e mostra Array==========
        $ListaArray = explode(' ', $listaEscrita);
        print_r($ListaArray);

        //=========Junta um Array formando String==========
        $ListaArray = implode(' ', $ListaArray);
        echo '<br/>'.$ListaArray;
    ?>
    <hr>

    <h3>Array</h3>
    <?php
        //=========Função que une Arrays==========
        $array1 = ['Chave1'=>'Valor1', 'Chave2'=>'Valor2'];
        $array2 = ['Chave3'=>'Valor3', 'Chave4'=>'Valor4'];
        $resultado = array_merge($array1, $array2);
        print_r($resultado);
        echo '<br/>';

        //=========Função que retorna o valor de chaves iguais==========
        $interArray1 = ['Chave1'=>'Valor1', 'Chave2'=>'Valor2'];
        $interArray2 = ['Chave1'=>'Valor1', 'Chave4'=>'Valor4'];
        print_r(array_intersect_key($interArray1, $interArray2));
        echo '<br/>';

        //=========Função que aplica uma função a todos os valores de uma Array==========
        $mapArray = ['<p>Paragrafo</p>', 'Texto', '<h6>Titulo</h6>'];
        echo '<br/>=====================Array não mapeado======================<br/>';
        print_r($mapArray);
        echo '<br/>=======================Array mapeado========================<br/>';
        print_r(array_map('strip_tags', $mapArray));
    ?>
    <hr>

</body>
</html>