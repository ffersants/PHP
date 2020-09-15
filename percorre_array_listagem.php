<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Hello world!';
        $noticias = array(
            array('manchete' => 'Lorem Ipsum é banido da internet', 'descricao' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. '),
            array('manchete' => 'Brasil chega a 131.408 mortes por coronavírus, segundo consórcio', 'descricao' => 'País tem 4.319.184 casos confirmados. Média móvel é de 721 óbitos por dia na última semana.')
        );
        

        // for($i = 0; $i != count($noticias); $i++){
        //     echo "<h1>" . $noticias[$i]['manchete'] . "</h1>";
        //     echo "<p>" . $noticias[$i]['descricao'] . "</h1>";
        //     echo "<hr>";
        // }

        foreach($noticias as $noticia){
            echo "<h1>" . $noticia['manchete'] . "</h1>";
            echo "<p>" . $noticia['descricao'] . "</h1>";
            echo "<hr>";
        }

    ?>
</body>
</html>