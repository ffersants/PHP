<?php
    //herdando a classe exception para a classe myexception
    class MyException extends Exception{
        public $error = "";
        
        public function __construct($arg){ 
            $this->error = $arg; 
        }

        public function show_error(){
            echo '<div style="background-color: black;color: white;">';
            echo $this->error;
            echo '</div>';
        }
    }


    try{
        throw new MyException("Essa é minha mensagem de erro");
    } 
    
    catch(MyException $a){
        $a->show_error();
    }
?>