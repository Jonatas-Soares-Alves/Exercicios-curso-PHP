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
    

    // To edit a file:
    /*
    if(file_exists("Files-Created/file-1.txt")){
        $pegar = file_get_contents("Files-Created/file-1.txt");
        $pegar = str_replace("3º linha", "Mudada", $pegar);

        file_put_contents("Files-Created/file-1.txt", $pegar);
        echo nl2br($pegar);
    }
    */

    // To delete a file:
    /*
    if(file_exists("Files-Created/file-1.txt")){
        unlink("Files-Created/file-1.txt");
        echo "Arquivo deletado com sucesso";
    }else{
        echo "Esse arquivo já foi deletado anteriormente";
    }
    */

?>