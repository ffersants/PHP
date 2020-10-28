<?php

    class Objeto{
        //atributos e métodos estáticos não precisam que a classe seja instanciada 
        //para que se tornem acessíveis, basta usar a sintaxe na linha 26 e 27
        
        public static $attr1 = "it's a STATIC attribute";
        public $attr2 = "it ISN'T a static attribute";
        
        public static function first(){
            //métodos estáticos não podem usar o operador $this
            echo "it's a STATIC METHOD";
        }
        
        public function second(){
        
            echo "it ISN'T a STATIC METHOD";
        //caso a classe não seja instanciada, o uso da palavra chave
        //$this provocará erros, uma vez que não há referência/contexto do objeto instanciado para ser acessado
            //echo $this->attr2;
        }
    }

    //métodos e atributos estáticos não podem ser acessados com o operador de membro ->
    Objeto::first();
    echo "<br>" . Objeto::$attr1;
    
    //MAS métodos não estáticos também podem ser acessados da mesma maneira que os estáticos
    //porém, fazer isso não é recomendado
    Objeto::second();

?>
