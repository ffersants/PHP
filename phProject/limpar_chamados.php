<?php
    $chamados = fopen("chamado.txt", "r+");
    ftruncate($chamados, 0);
    fclose($chamados);
    print_r("asdip");
    header("Location: consultar_chamado.php");
?>