<?php
    /*
    REQUIRE will produce a fatal error (E_COMPILE_ERROR) and stop the script
    INCLUDE will only produce a warning (E_WARNING) and the script will continue
    */
    require './bibliotecas/lib1/lib1.php';//aqui há o namespace A
    require './bibliotecas/lib2/lib2.php';//aqui há o namespace B
    
    //use Cliente do escopo de namespace A, que está presente em lib1.php
    use A\Cliente;
    //continua-se instanciando como Cliente()
    $a = new Cliente();
    $a->salvar();// echo 'salvar';

    //use como ClienteNsB, a classe Cliente do escopo de namespace B, que está presente em lib1.php
    use B\Cliente as ClienteNsB;
    //agora instancia-se com ClienteNsB, pois esta é uma classe idêntia à Cliente
    $b = new ClienteNsB();
    echo $b->nome;//$nome = 'Jamilton';
?>