<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 0;
        while($num < 10){
            echo $num;
            
            if($num == 5){
                break;//força a saída do while
            } else{
                $num++;
            } 
            
        }
    ?>
</body>
</html>