<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--frete gratuito se cliente possui cartão e valor da compra for maior que 100 -->

    <?php 
        define('TEM_CARTAO', true);
        define('VALOR_TOTAL', 500.00);
    ?>

    <h2>Detalhes do pedido</h2>

    <p>
        Possui cartão da loja? 
        
        <?php if(TEM_CARTAO) {
            echo '<strong> SIM </strong>';
        } ?>
    </p>

    <p>
        Valor da compra:
        <strong><?php echo VALOR_TOTAL; ?></strong>    
    </p>
    
    <p>
        Recebeu desconto do frente? 
        <?php 
            if(VALOR_TOTAL >= 100 && TEM_CARTAO){
                echo '<strong>SIM</strong>';
            } else {
                echo '<strong>NÃO</strong>';
            }
        ?>        
    </p>
</body>
</html>