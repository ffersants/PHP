<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //declaração via função array
        $materialEscolar = array('Lápis', 'Caneta', 'Caderno');
        echo '<pre>';
        //Esta função mostrará uma representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.
        //Arrays e objetos são explorados recursivamente com valores identados na estrutura mostrada.
            var_dump($materialEscolar);
        echo '</pre>';
        
        echo '<br>';
        
        //declaração via colchete
        $listaViagem = ['8 bermudas', '3 blusas', '1 oculos', '1 chapéu', '1 tênis'];
        echo '<pre>';
        //Imprime informação sobre uma variável de forma legível, apresentando também propriedades protegidas 
        //e privadas de objetos com PHP
            print_r($listaViagem);
        echo '</pre>';

        echo '<br>';

        echo $listaViagem[2];

        //explicitando ao array os indexes e o valor atribuído a cada index array('index2' => 'valorDeIndex2');
        $vetorDeIndexPersonalizado = array('index1' => 'Index definido explicitamente', 'Teste', 'INDEX2' => 'meu index');
        echo '<pre>';
            print_r($vetorDeIndexPersonalizado);
        echo '</pre>';
        $vetorDeIndexPersonalizado2 = [
            'index1' => 'Index definido explicitamente', 
            'Teste', 'INDEX2' => 'meu index'
        ];

        ////////////////// ARRAYS MULTIDIMESSIONAIS /////////////////////////////
        ///////////////// --- array de array --- /////////////////
        $arrayPrincipal['frutas'] = ['Banana', 'Maça', 'Abacaxi'];
        $arrayPrincipal['pessoas'] = ['Ana', 'Maria', 'Ícaro', 'Fernando'];
        echo '<pre>';
            //dentro do array principal, acessar o index frutas, que é um segundo array, e nele jogar na tela o item no index 3
            print_r($arrayPrincipal['frutas'][2]);
        echo '</pre>';

        /////////// PESQUISA em ARRAY ///////////
        echo '<h2> Pesquisa em array com uso dos métodos <br> in_array() <br> array_search()</h2> <br>';
        //in_array() --> retorna 1 ou 0, caso o item pesquisado seja encontrado no array
        //array_search() --> Retorna o índice do elemento pesquisado, caso ele seja encontrado, e retorna null caso não seja encontrado
        
        echo 'in_array() <br>';

        define('frutaPesquisada', 'Banana');
        if(in_array(frutaPesquisada, $arrayPrincipal['frutas'])){
            echo 'Fruta encontrada <br>';
        } else {
            echo 'Fruta não encontrada <br>';
        }

        echo 'array_search()<br>';

        $frutaPesquisada2 = 'Ícaro';
        $resultado = array_search($frutaPesquisada2, $arrayPrincipal['pessoas']);
        if($resultado != null){
            echo 'O item procurado foi encontrado no índice ' . $resultado;
        } 
    ?>
</body>
</html>