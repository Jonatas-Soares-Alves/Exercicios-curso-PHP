<?php
    
    if(file_exists("Files-Created/file-1.txt")){
        echo "Arquivo encontrado!";
        $conteudo = file_get_contents("Files-Created/file-1.txt");
        // nl2br() faz ler "\r\n" como quebra de linha "<br>".
        echo "<hr>".nl2br($conteudo);
    }else{
        file_put_contents("Files-Created/file-1.txt", "Conteudo do arquivo\r\n2º linha\r\n3º linha");
        echo "Arquivo criado!";
    }
    

    // Edita um arquivo:
    /*
    if(file_exists("Files-Created/file-1.txt")){
        $pegar = file_get_contents("Files-Created/file-1.txt");
        $pegar = str_replace("3º linha", "Mudada", $pegar);

        file_put_contents("Files-Created/file-1.txt", $pegar);
        echo nl2br($pegar);
    }
    */

    // Deleta um arquivo:
    /*
    if(file_exists("Files-Created/file-1.txt")){
        unlink("Files-Created/file-1.txt");
        echo "Arquivo deletado com sucesso";
    }else{
        echo "Esse arquivo já foi deletado anteriormente";
    }
    */

    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ PASTAS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    
    //mkdir('pasta-teste'); // <--- Cria a pasta


    if(is_dir('pasta-teste')){ // <--- Testa a pasta
        echo '<hr>É uma pasta válida';
    }else{
        echo '<hr>Não é uma pasta válida';
    }


    //rmdir('pasta-teste'); // <--- Deleta a pasta

    echo '<hr>';
    if($infoPasta = opendir('pasta-teste')){ // <--- Abre a pasta
        while($leitura = readdir($infoPasta)){ // <--- Lê a pasta
            if($leitura == '.' or $leitura == '..'){
                continue;
            }

            echo "$leitura\n <br/>";
        }
    }
    closedir($infoPasta); // <--- Fecha a pasta

?>