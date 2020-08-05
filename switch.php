<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $opcao = 2;

        switch($opcao){
            case 1:
                echo 'Opção = 1';
                break;
            case 2:
                echo 'Opção = 2';
                break;
            default:
                echo 'Opção - X';
        }
    ?>
</body>
</html>