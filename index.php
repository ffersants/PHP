<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo 'Hello world'; ?>
    <br>

    <?= print('Hello world');?> 
    <br>
    <?php 
        $nome = 'Fernando';
        $idade = 19;
        $time = 'Flamengo';
        //concatenação
        echo 'Meu nome é '.$nome.', eu tenho '.$idade.' anos e torço para o '.$time ;
        echo '<br>';
        echo "Meu nome é $nome , eu tenho $idade anos e torço para o $time.";
        echo '<br><br>';
        /*declarando variável constante, é necessário fazer uso da função define()
            essa função espera dois parâmetros que são respectivamente chave e valor da variável
        */
        define('O_MAIS_LINDO', 'Fernando');
        echo (O_MAIS_LINDO);
    ?>
</body>
</html>