<?php

    session_start();

    $autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    foreach($_SESSION["usuarios"] as $usuario){
        if($usuario["email"] == $_POST["email"] && $usuario["senha"] == $_POST["senha"]){
            $autenticado = true;
            $user_id = $usuario["id"];
            $usuario_perfil_id = $usuario["perfil_id"];
            $_SESSION["user_email"] = $usuario["email"];
        } 
    }
    
    if($autenticado){
        //a variável de sessão abaixo é usada para validação de 
        //sessão ativa no acesso às páginas restritas    
        $_SESSION["autenticado"] = "true";
        //$_SESSION["id"] eh a identificação do usuário 1, 2, 3...
        $_SESSION["id"] = $user_id;
        //$_SESSION["perfil_id] eh o perfil de admin(1) ou user(2)
        $_SESSION["perfil_id"] = $usuario_perfil_id;
        
        header("Location: home.php");
    } else{
        $_SESSION["autenticado"] = "false";
        header("Location: index.php?login=failed");
    }
?>