<?php
    session_start();
    

    $titulo = str_replace("#", "*", $_POST["titulo"]);
    $categoria = str_replace("#", "*", $_POST["categoria"]);
    $descricao = str_replace("#", "*", $_POST["descricao"]);
    
    //PHP_EOL = end of line
    $texto = $titulo . "---" . $categoria . "---" . $descricao . "---" . $_SESSION["id"] . "---" . PHP_EOL;
    //echo $texto;
    //parâmetro "a" faz o seguinte:
    //Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. 
    //Se o arquivo não existir, tenta criá-lo.
    $arquivo = fopen("chamado.txt", "a");

    fwrite($arquivo, $texto);

    fclose($arquivo);
    // echo "<pre>";
    //     print_r($texto);
    // echo "</pre>";
    header("Location: abrir_chamado.php");
?>