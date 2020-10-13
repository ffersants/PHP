<?php
    session_start();
    $_SESSION["usuario_cadastrado"] = array();
    array_push($_SESSION["usuario_cadastrado"], array("id" => mt_rand(0, mt_getrandmax()), "email" => $_POST["email"], "senha" => $_POST["senha"], "perfil_id" => 2));
    header("Location: index.php");
?>