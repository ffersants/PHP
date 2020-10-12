<?php
    session_start();

    array_push($_SESSION["usuarios"], array("id" => mt_rand(0, mt_getrandmax()), "email" => $_POST["email"], "senha" => $_POST["senha"], "perfil_id" => 1));

    header("Location: index.php");
?>