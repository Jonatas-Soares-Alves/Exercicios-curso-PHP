<?php
    class Exemplo{
        private $varPriv;
        public $varPublic;
    }

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
    }
?>