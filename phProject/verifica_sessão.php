<?php
  session_start();

  if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != "true" ){
    header("Location: index.php?logged=false");
  }
?>