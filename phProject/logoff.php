<?php
    session_start();
    //unset($_SESSION["autenticado"]); verifica antes se existe o índice especificado, caso não exista, nenhum erro é apresentado
    
    //session_destroy();
    unset($_COOKIE["PHPSESSID"]);
    header("Location: index.php");
?>
