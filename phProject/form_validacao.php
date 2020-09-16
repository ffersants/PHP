<?php
$is_loged = false;
    $usuarios = array(
        array("email" => "ffersants15@gmail.com", "senha" => "12345678"),
        array("email" => "felip@gmail.com", "senha" => "abc")
    );


    foreach($usuarios as $usuario){
        if($usuario["email"] == $_POST["email"] && $usuario["senha"] == $_POST["senha"]){
            $is_loged = true;
        } 
    }

    if($is_loged){
        echo 'User logado';
    } else{
        //força redirecionamento de página
        header("Location: index.php?login=failed");
    }
    // echo "<pre>";
    // print_r($usuarios);
?>