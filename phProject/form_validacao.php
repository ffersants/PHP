<?php

    session_start();

    $autenticado = false;
    $usuarios = array(
        array("email" => "ffersants15@gmail.com", "senha" => "12345678"),
        array("email" => "felip@gmail.com", "senha" => "abc")
    );


    foreach($usuarios as $usuario){
        if($usuario["email"] == $_POST["email"] && $usuario["senha"] == $_POST["senha"]){
            $autenticado = true;
        } 
    }

    if($autenticado){
        $_SESSION["autenticado"] = "true";
        header("Location: home.php");
    } else{
        $_SESSION["autenticado"] = "false";
        header("Location: index.php?login=failed");
    }
?>