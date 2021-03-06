<?php
  //require faz com que um erro fatal seja apresentado caso haja algum problema no carregamento
  //do script incluído, impedindo a continuação de carregamento da página
  require "verifica_sessão.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./logoff.php">SAIR</a>
        </li>
      </ul>

    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php"> 
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
          if($_SESSION["user_email"] == "admin@gmail.com"){
        ?>
        <div class="text-center mr-auto ml-auto">
          <a class=" d-block ml-auto mr-auto mt-3 mb-2" href="remover_usuarios.php">
              <button class="btn btn-danger">Remover usuários</button>
          </a>
          <a class=" d-block ml-auto mr-auto mt-3 mb-5" href="limpar_chamados.php">
              <button class="btn btn-danger">Remover chamados abertos</button>
          </a>
        </div>  
        <?php } ?>
    </div>
  </body>
</html>