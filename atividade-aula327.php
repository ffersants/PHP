
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcularImpostoDeRenta($salario){
            if ($salario <= 1903.98){
                echo"<h2>Você está isento a este imposto!</h2>";
            } 
            else if ($salario >= 1903.99 && $salario <= 2826.65){
                define('imposto', 7.5 / 100 * $salario);
                echo 'O valor do imposto a ser pago é de: ' . imposto;
            } 
            else if ($salario >= 2826.66 && $salario <= 3751.05){
                define('imposto', 15 / 100 * $salario);
                echo 'O valor do imposto a ser pago é de: ' . imposto;
            } 
            else if ($salario >= 3751.06 && $salario <= 4664.68){
                define('imposto', 22.5 / 100 * $salario);
                echo 'O valor do imposto a ser pago é de: ' . imposto;
            } 
            else if ($salario > 4664.68){
                define('imposto', 27.5 / 100 * $salario);
                echo 'O valor do imposto a ser pago é de: ' . imposto;
            }

        }

        calcularImpostoDeRenta(2526.65)
    ?>
</body>
</html>