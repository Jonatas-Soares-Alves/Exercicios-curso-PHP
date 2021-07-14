<?php
    //Consultando um XML
    $xml = simplexml_load_file("info-XML.xml");

    print_r($xml);
    echo "<br/><br/>";
    echo $xml->personagem1->pessoalInf1->nome1;
    echo ' e '.$xml->personagem2->pessoalInf2->nome2;

    //Criando um XML
    $infoXML = ['Jonas'=>'nome','21'=>'idade']; //<-- Informações a serem registradas
    $mainTag = new SimpleXMLElement('<registro/>'); //<-- Tag principal
    array_walk_recursive($infoXML, array($mainTag, 'addChild')); //<-- Prepara
    file_put_contents('escrevendo-XML.xml', $mainTag->asXML()); //<-- Escreve / Cria / Altera

    $xml2 = simplexml_load_file("escrevendo-XML.xml");
    echo '<hr>'.$xml2->nome;
?>