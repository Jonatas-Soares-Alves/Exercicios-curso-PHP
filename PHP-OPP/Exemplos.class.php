<?php
    //=============NAMESPACE==============
    namespace Testes;

    //-------------------Class Exemplo---------------------
    class Exemplo{
        private $varPriv;
        public $varPublic;
        const ValorConstante = 300;
    }//-------------------Class Exemplo---------------------

    //====================Class Utilidades====================
    abstract class Utilidades{
        public function Falar(){
            echo 'Função Falar<br/>';
        }

        protected function FalarBaixo(){
            echo 'Função FalarBaixo<br/>';
        }

        private function Cochichar(){
            echo 'Função Cochichar<br/>';
        }
    }//====================Class Utilidades====================

    //-------------------Class Pai---------------------
    class Pai extends Utilidades{
        public function MostrarFalarBaixo(){
            $this->FalarBaixo();
        }
    }//-------------------Class Pai---------------------

    //==================Class Pessoa=====================
    class Pessoa{
        private $altura = 0;
        private $idade = 0;
        private $nome = '';

        public function SetAltura($alt){
            $this->altura = $alt;
        }

        public function SetIdade($age){
            $this->idade = $age;
        }

        public function SetNome($nomeEsc){
            $this->nome = $nomeEsc;
        }

        public function Crescer($mais){
            $this->altura += $mais;
        }

        public function Envelhecer($anos){
            $this->idade += $anos;
        }

        private function Mostrar($info){
            echo '<hr/>'. $info. '<hr/>';
        }

        public function MostrarTudo(){
            $texto = $this->nome. '<br/>'. $this->idade. '<br/>'. $this->altura;
            $this->Mostrar($texto);
        }
    }//==================Class Pessoa=====================

    //==================Class PreSet (Construct)=====================
    class PreSet{
        private $setClass1;
        private $setClass2;

        public function __construct($set1, $set2){
            $this->setClass1 = $set1;
            $this->setClass2 = $set2;
        }

        public function getSet1(){
            return $this->setClass1;
        }

        public function getSet2(){
            return $this->setClass2;
        }
    }//==================Class PreSet (Construct)=====================
    
?>