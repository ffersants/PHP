<?php
    session_start();
    //unset($_SESSION["autenticado"]); verifica antes se existe o índice especificado, caso não exista, nenhum erro é apresentado
    
    session_destroy();

    header("Location: index.php");
?>
