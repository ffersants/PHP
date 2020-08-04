<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         echo '<strong>Igual</strong>';
         echo '<br>';
         $igual = 2;
         if ($igual == 2) {
             echo "O valor na variável igual é: $igual";
         }
         
         echo '<br><br>';
         
         echo '<strong>Identico</strong>';
         echo '<br>';
         $identico = '3';
         if ($identico === 3) {
             echo "O valor na variável idêntico é: $identico";
         } else {
             echo "O valor na variável idêntico é: $identico. No entanto, o dado é string. Condição false executada.";
         }

         echo '<br><br>';

         echo '<strong>Diferente</strong> <br>';
         $diferente = 'Junho';
         if ($diferente <>'Julho') {
             echo '$diferente' . ' é diferente (!= ou <>) de junho.';
         }

         echo '<br> <br>';

         echo '<strong>Não idêntico <br></strong>';
         if (5 !== '5'){
             echo 'É o mesmo valor, porém, diferente tipo de dado. <br> Logo: x !== X = true.';
         }

         echo '<br> <br>';

         echo '<strong>Menor que</strong> <br>';
         if (5 < 6) {
             echo '5 < 6 = TRUE';
         }
         echo '<br> <br>';

         echo '<strong>Maior que</strong> <br>';
         if (5 > 2) {
             echo '5 > 2 = TRUE';
         }
         echo '<br> <br>';
         //<= or >=
    ?>
</body>
</html>