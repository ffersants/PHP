<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //recuperar data atual
        //retorna dia do mês, 2 dígitos com zero à esquerda. Melhor que o .getDay() do JS
        echo date('d') . "<br>";

        //Uma representação textual de um dia, três letras	
        echo date('D') . "<br>";

        echo date('L') . "<br>";

        echo date('l') . "<br>";
        //retorna o dia do ano
        echo date('z') . "<br>";
        //retorna data e hora atual de acordo com o sistema operacional
        echo date('d/m/Y H:i')
    ?>
</body>
</html>