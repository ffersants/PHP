<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $a = true;
        $b = true;

        if ($a && $b){
            echo 'tudo true $a && $b === true <br>';
        }

        define('c', 'true');
        define('d', 'false');
        //ao criar variáveis constantes, dispensa-se o uso do $ para resgatar tais variáveis
        if (c || d){
            echo 'Um dos dois é true, c || d. <br>';
        }

        if (5 == '5' XOR $a = true){
            echo 'entrou na condição true';
        } else {
            echo 'saíu da condição true, ou seja, AS DUAS CONDIÇÕES estão <strong>RETORNANDO O MESMO VALOR</strong>, true ou false.<br>';
        }

        if (!(false)){
            echo 'O <strong>valor</strong> false foi <strong>invertido</strong> para true desta maneira !(false)';
        }

        
    ?>
</body>
</html>