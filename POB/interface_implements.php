<?php
    //uma interface declara os métodos que obrigatoriamente devem ser sobrescritos nos objetos
    //que implementam a interface

    interface CalculaNota{
        //como estes métodos serão sobrescritos, não deve-se criar o corpo da função e nem seu escopo, abrindo e fechando chaves
        //eles também DEVEM ser PÚBLICOS
        public function pegaNota();
        public function pegaTurma();
    }

    class Aluno implements CalculaNota{
        public $nome;
        public $serie;
        public $nota = 10;        
        
        function __construct($nome, $serie){
            $this->nome = $nome;
            $this->serie = $serie;
        }

        public function pegaNota(){
            return $this->nota; 
        }

        public function pegaTurma(){
            return $this->serie;
        }
    }

    $fernando = new Aluno("fernando", "3A");

    print_r($fernando->pegaTurma());
?>