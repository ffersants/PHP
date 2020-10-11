<?php

    session_start();

    $autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    //$perfil_id = array(1 => "Administrativo", 2 => "Usuário");
    
    $usuarios = array(
        array("id" => 11, "email" => "admin@gmail.com", "senha" => "12345678", "perfil_id" => 1),
        array("id" => 22, "email" => "joao@gmail.com", "senha" => "12345678", "perfil_id" => 2),
        array("id" => 33, "email" => "maria@gmail.com", "senha" => "12345678", "perfil_id" => 2)
    );

    

    foreach($usuarios as $usuario){
        if($usuario["email"] == $_POST["email"] && $usuario["senha"] == $_POST["senha"]){
            $autenticado = true;
            $user_id = $usuario["id"];
            $usuario_perfil_id = $usuario["perfil_id"];
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