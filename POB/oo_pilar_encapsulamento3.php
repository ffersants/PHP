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
    //um método protegido é heardado, no entanto ele também necessita de uma interface na classe filha         
        function __get($pegaAtributo){
            return $this->$pegaAtributo;
        }
    }

    $celta = new Carro();

    $celta->seti("cor", "verde");

    echo $celta->cor;

    //se um método mágico __set() e/ou __get()foi declarado na classe pai, ele pode atuar somente na classe pai. 
    //Enquanto se ele for declarado na classe filha, ele atuará somente na calsse filha
?>
