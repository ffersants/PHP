<?php 
    class Aluno{
        public $name = null;

        function setName($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }
    }

    $fernando = new Aluno();
    $fernando->setName("Fernando Ferreira");
    echo $fernando->getName();

?>