<?php 
    class Aluno{
        public $name = null;
        public $age = null;
        public $failed = null;
        
        function __construct($name, $age, $failed){
            $this->name = $name;
            $this->age = $age;
            $this->failed = $failed;
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function printAll(){
            echo "name: " . $this->__get("name") . "<br>";
            echo "age: " . $this->__get("age") . "<br>";
            echo "failed: " . $this->__get("failed") . "<br>";
        }
    }
    //o método __construct() é executado assim que o objeto é instanciado
    $fernando = new Aluno("Fernando Ferreira", 20, "False");
    
    $fernando->printAll();

?>