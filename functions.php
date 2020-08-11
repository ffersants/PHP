
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print('<h2>Calcular Área de Terreno</h2><br>');
       function calcularAreaTerreno($largura, $comprimento){
           $area = $largura * $comprimento;

           return $area;
       }

       $resultado = calcularAreaTerreno(32, 50);

       echo $resultado;
       echo '<BR>';
       echo calcularAreaTerreno(15, 20);

    ?>
</body>
</html>