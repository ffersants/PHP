<?php 
    class Aluno{
        public $name = null;
        public $age = null;
        public $failed = null;
        
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function printAll(){
            //essa função eh uma rotina, e ela chama outra rotina, que no caso é o método __get()
            echo "name: " . $this->__get("name") . "<br>";
            echo "age: " . $this->__get("age") . "<br>";
            echo "failed: " . $this->__get("failed") . "<br>";
        }
    }

    $fernando = new Aluno();
    $fernando->__set("name", "Fernando Ferreira");
    $fernando->__set("age", 20);
    $fernando->__set("failed", "no");
    
    $fernando->printAll();

?>