<?php
    //métodos privados

    class Carro{
        private $cor = NULL;
        private $ano = NULL;
        //método privado
        private function setValues($atributo, $valorDoAtributo){
            $this->$atributo = $valorDoAtributo;
        }

        //para acessar um método privado, deve-se fazer uso de um método público que 
        //criará a ponte, a interface para acessar o método privado
        
        public function seti($atr, $value){
            $this->setValues($atr, $value);
        }
        
        function __get($pegaAtributo){
            return $this->$pegaAtributo;
        }
    }

    $celta = new Carro();

    $celta->seti("cor", "verde");

    echo $celta->cor;
?>