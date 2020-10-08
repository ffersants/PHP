<?php
    require_once "menu.php";
    echo "<br>";
?>

Usando o require_once, o script será puxado somente uma vez.
<br>
Portanto, nada será apresentado no outro require_once abaixo.
<br>
O mesmo vale para include_once.
<?php 
    require_once "menu.php";
?>