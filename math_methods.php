<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $toFloor = 21.3;
        echo "floor() arredonda $toFloor para " . floor($toFloor) . ' sempre pra BAIXO';
    echo '<br>';
        $toCeil = 5.43;
        echo "ceil() arredonda $toCeil para " . ceil($toCeil) . ' sempre pra CIMA';
    echo '<br>';
        $round = 2.50;
        echo "round() converte $round para " . round($round) . ' aproximando o valor pro extremo em quele está mais próximo.';
            echo '<br>';
            echo 'Exemplo: x <= 1.49 então round(x) === 1';
            echo '<br>';
            echo 'Exemplo: x >= 1.50 então round(x) === 2';
    echo '<br>';
        $min = 3;
        $max = 9;
        echo 'rand() gera valores aleatórios, entre 0 e ' . getrandmax() . ' quando nenhuma parâmetro é passado.<br>';
        echo 'No entanto, você pode gerar valores dado, como parâmetro, um intervalo min(3) e max(9): rand(min,max) = ' . rand($min,$max);
    ?>
</body>
</html>