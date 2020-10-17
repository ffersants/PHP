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
    }

    $fernando = new Aluno();
    $fernando->__set("name", "Fernando Ferreira");
    $fernando->__set("age", 20);
    $fernando->__set("failed", "no");
    echo "name: " . $fernando->__get("name") . "<br>";
    echo "age: " . $fernando->__get("age") . "<br>";
    echo "failed: " . $fernando->__get("failed") . "<br>";

?>

<!-- aqui o conceito de overloading é diferente do visto na matéria de POB em Java, pois lá, overloading ou sobrecarga
é a prática de criação e chamada de funções com o mesmo nome, no entanto, com assinaturas (argumentos) diferentes.
Isso em Java pode ser feito sem problemas...
 -->