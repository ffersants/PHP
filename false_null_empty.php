<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase, null and empty</title>
</head>
<body>
    <?php
        //$ehEmpty = empty;
        $ehNull = null;
        $branco = "";
        $igualFalse = false;
        echo "<h2>is_null()</h2><br>";

        if(is_null($ehNull)){
            echo 'A variável $ehNull, que está atribuída ao valor null, retornou TRUE no teste is_null()';
        } 
        echo('<br>');
        if(is_null($branco) <> true){
            echo 'A variável $branco, que está atribuída ao valor "", retornou FALSE no teste is_null()';
        } 
        echo('<br>');
        if(is_null($igualFalse)<>true){
            echo 'A variável $igualFalse, que está atribuída ao valor false, retornou FALSE no teste is_nulL()<br>';
        }
        echo('<br><br><br>');

        //---------------------------------------------------------------------------------------------------//
        echo '<h2>empty()</h2>';
        if(empty($ehNull)){
            echo 'A variável $ehNull, que está atribuída ao valor null, retornou TRUE no teste empty()';
        } 
        echo('<br>');
        if(empty($branco)){
            echo 'A variável $branco, que está atribuída ao valor "", retornou TRUE no teste empty()';
        } 
        echo('<br>');
        if(empty($igualFalse)){
            echo 'A variável $igualFalse, que está atribuída ao valor false, retornou TRUE no teste empty()<br>';
        }
        echo'<h2>Portanto, o teste is_null() é true quando o valor é EXCLUSIVAMENTE null, enquanto empty() é true quando o valor é tanto null quando vazio "" ou também false</h2>'
    ?>
</body>
</html>