<?php
    //Para esse método de AutoLoad, O nome da classe deve ser o mesmo do arquivo.
    //E caso esteja em uma pasta, deve ter um "Namespace" com o mesmo nome.
    include('config.php');

    new Home\Inicial();
    new Utilidades();
?>