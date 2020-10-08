<?php
    // cookies.php

    // if (isset($_COOKIE['cookie_teste'])) {
    //     echo 'Você JÁ passou por aqui!';
    // } else {
    //     echo 'Você NUNCA passou por aqui.';
    //     setcookie('cookie_teste', 'Algum valor...', time() + 3600);
    // }

    
    // sessions.php

    session_start();

    if (isset($_SESSION['usuario'])) {
        echo "Bem vindo {$_SESSION['usuario']}!";
    } else {
        echo 'Você NUNCA passou por aqui.';
        $_SESSION['usuario'] = 'João';
    }

?>