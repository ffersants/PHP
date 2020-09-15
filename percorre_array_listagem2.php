<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayNames = array(
            array("Nome" => "Fernando", "Sobrenome" => "Ferreira"), 
            array("Nome" => "Felipe", "Sobrenome" => "Santos"), 
            array("Nome" => "Sandra", "Sobrenome" => "Lago"), 
            array("Nome" => "Almir", "Sobrenome" => "de Oliveira")
        );
        print_r($arrayNames);
        echo "<hr>";

        foreach($arrayNames as $singleArray => $chaveS){
            // print_r($name);
            // echo "<br>";
            foreach($chaveS as $chave => $valor){
                echo "$chave  <br> $valor <br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>