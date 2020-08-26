<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $oneToHundred = 0;
        echo $oneToHundred;
        
        do{
            $oneToHundred++;
            if($oneToHundred % 2 == 1){
                continue;//cancela a execução do resto do bloco de código e passa para a próxima iteração
            } else{
                echo '<br>' . $oneToHundred;
            }

           
        } while($oneToHundred != 100)
    ?>
</body>
</html>