<?php
    /*Algumas vezes, ao importar bibliotecas para o código, podemos enfrentar problemas de funções,
    classes e iterfaces com nomes iguais, criando assim, chaves duplicadas que resultam em erros.
    No entanto, para não ter que redefinir cada chave duplicada, podemos usar namespaces, que criam
    escopos específicos que isolam um objeto e previne ele de entrar em conflito com outro objeto
    que contém o mesmo nome.
    */

    namespace my_code;
    class Aluno{
        public $nota = 3;
        function reprovar(){
            echo 'reprovado';
        }
        function __constructor($name){
            $this->name = $name;
        }
    }
    //aqui foram dividos dois escopos, onde impede o conflito no nome das classes
    namespace my_other_code;
    class Aluno{
        public $nota = 9;
        function aprovar(){
            echo 'aprovado';
        }
        function __constructor($name){
            $this->name = $name;
        }
    }

    $fernando = new \my_code\Aluno('Fernando');
    //echo $fernando->nota;

    //agora faremos o mesmo com interfaces
    
    namespace first_name_space;

    interface CadastraClienteInterface{
        //como trata-se apenas de uma declaração, não há necessidade de abrir o escopo da função com as chaves
        public function cadastraNome($nome);
    }
    ///////////////////////////
    class Cliente implements \second_name_space\CadastraClienteInterface{
        public $nome;
        function cadastraIdade($idade){
            $this->idade = $idade;
        }
    }
    ////////////////////////////
    namespace second_name_space;

    interface CadastraClienteInterface{
        public function cadastraIdade($idade);
    }

    class Cliente implements \first_name_space\CadastraClienteInterface{
        public $idade;
        function cadastraNome($nome){
            $this->nome = $nome;
        }
    }
    $eu = new Cliente();
    $eu->cadastraNome("Fernanod");
?>