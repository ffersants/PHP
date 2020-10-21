<?php
    //MÉTODOS GET e SET

    class Cachorro{
        protected $cor = NULL;
        protected $nome = NULL;
        //eh possível criar um método get e set para os atributos
        //
        function meuSet($atributo, $valor){
            $this->$atributo = $valor;
        }
        function meuGet($atributo){
            echo $this->$atributo;
        }

    }

    $ralph = new Cachorro();
    $ralph->meuSet("cor", "verde");
    $ralph->meuGet("cor");

    //PORÉM, também é possível fazer uso de métodos set e get nativos
    echo '<hr>';
    class Gato{
        protected $corDoGato = NULL;
        protected $nomeDoGato = NULL;
        //esses métodos são executados sem ser explicitamente chamados
        function __set($atributoDoGato, $valorDoAtributoDoGato){
            $this->$atributoDoGato = $valorDoAtributoDoGato;
        }

        function __get($pegaAtributoDoGato){
            return $this->$pegaAtributoDoGato;
        }
    }

    $miau = new Gato();
    //tais chamadas de atributos, que antes apresentariam erros, agora funcionam em razão dos métodos __get() e __set()
    //que são executados por debaixo dos panos
    $miau->corDoGato = 'preto';
    echo $miau->corDoGato;
?>