<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $tipoTxt = 'É string';
       define('tipoInt', 20);
       $floatDoubleReal = 5.2;
       //para obter o tipo de dado em uma variável, utilize a função gettype();
       echo 'A variável $tipoTxt possui dado do tipo <strong>' . gettype($tipoTxt) . '</strong>'; 
       echo '<br>';
       echo 'A variável $tipoInt possui dado do tipo <strong>' . gettype(tipoInt) . '</strong>'; 
       echo '<br>'; 
       //float, double e real é o mesmo tipo de dado 
        echo 'A variável $floatDoubleReal possui dado do tipo <strong>' . gettype($floatDoubleReal) . '</strong>';
        
        //converter um tipo de dado e convertê-lo para outro
        // variávelNova = (novoTipoDeDado) $variavelComDadoASerAlterado
        
        echo '<h2>Tipos de dados convertidos</h2>';
        
        //converte double para string
        $floatDoubleRealAsSTRING = (string) $floatDoubleReal;
        $floatDoubleRealAsSTRING = gettype($floatDoubleRealAsSTRING);
        echo "a variável floatDoubleReal possui dado double, no entanto agora temos seu valor $floatDoubleReal como <strong>$floatDoubleRealAsSTRING</strong>";
        echo '<br>';
        
        //converte string para real
        $numAsSTRING = '685';
        $numConvertedInINTEGER = (integer) $numAsSTRING;
        $numConvertedInINTEGER = gettype($numConvertedInINTEGER);
        echo "a variável numAsSTRING possui dado string, no entanto agora temos seu valor $numAsSTRING como <strong>$numConvertedInINTEGER</strong>";
        echo '<br>';

        //converte float para inteiro
        $floatDoubleRealASINT = (int) $floatDoubleReal;
        $floatDoubleRealASINT = gettype($floatDoubleRealASINT);
        echo "a variável floatDoubleReal possui dado float, no entanto agora temos seu valor $floatDoubleReal como <strong>$floatDoubleRealASINT</strong>";
        echo '<br>';

        
    ?>
</body>
</html>