<?php
    echo '<p>Execução normal do script';
    
    try{
        echo '<br><br><br>código no escopo try, com possibilidade de erros na execução';
        $sql = 'SELECT * FROM CLIENTS';
        mysql_query($sql);//aqui será jogado um fatal error
    }

    catch(Error $e){
        echo "<br><br><br> erro capturado no bloco catch. Script continuará com execução";
    }

    finally{
        echo '<br><br><br>Código do escopo finally';
        if(!file_exists("teste.php")){
            throw new Exception("Esta é uma exception lançada propositalmente no escopo finally, impedindo o script de continuar!!");
        }
    } 
?>