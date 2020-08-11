<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo '<h2>String methods</h2>';
        $toLower = 'ISSO EH UMA STRING EM CAPS COM O METODO STRTOLOWER()<br>';
        echo strtolower($toLower);

        $toUpper = 'isso eh uma string sem caps com o metodo strtoupper()<br>';
        echo strtoupper($toUpper);

        $ucFirst = 'primeiro carater em maiusculo com ucfirst() <br>';
        echo ucfirst($ucFirst);

        $strLen = '<strong>Essa frase NÃO tem </strong>';
        echo $strLen . strlen($strLen) . ' caracteres, aqui as tags html também estão contando<br>';

        $str_replace = 'A data 28/08/200 tem barras';
        echo $str_replace . ', mas agora está assim: ' . str_replace("/", '-', $str_replace . ' graças ao str_replace()<br>');
    
        $substr = 'Esse texto era grande, mas ele foi cortado graças ao substr()';
        $firstPart = substr($substr, 0, 21);
        $secondPart = substr($substr, 23, 50);
        echo $firstPart . '<br>';
        echo $secondPart . '<br>';
    ?>
</body>
</html>