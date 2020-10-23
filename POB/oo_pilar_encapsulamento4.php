<?php
    class Pai{
        private $nome = "Almir";
        protected $sobrenome = "Ferreira";
        public $humor = "sonolento";

        
    }

    class Filho extends Pai{
        function get($attr){
            return $this->$attr;
        }

        function set($attr, $value){
            $this->$attr = $value;
        }
    }

    $eu = new Filho();

    echo "<pre>";
        print_r($eu);
    echo "</pre>";
    //apresenta erro como se o atributo não fosse definido. Mas ele foi definido, só que na instância
    //Pai, e com o operador de visibilidade private
    echo $eu->get("nome");

    echo '<hr><hr><hr>';
    //neste momento, eu não altero o atributo protegido "nome", mas sim, crio ele dentro do objeto Filho
    $eu->set("nome", "Fernando");

    echo $eu->get("nome");
    //aqui é possível ver que temos um attr protegido "nome" no objeto pai e outro no objeto filho (criado na linha 31)
    echo "<pre>";
        print_r($eu);
    echo "</pre>";
?>