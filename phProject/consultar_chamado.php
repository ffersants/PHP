<?php
  //require faz com que um erro fatal seja apresentado caso haja algum problema no carregamento
  //do script incluído, impedindo a continuação de carregamento da página
  require_once "verifica_sessão.php";

  $arquivo = fopen("chamado.txt", "r");

  $chamados = array();

  //feof procura o fim do arquivo e retorna true quando o ponteiro o encontra
  while(!feof($arquivo)){
    //fgets captura linha por linha do arquivo aberto
    $linha = fgets($arquivo);
    //array incremental que guardará uma linha em cada índice
    $chamados[] = $linha;
    
  }
  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      a:hover{
        text-decoration: none;
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
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <?php
              foreach($chamados as $chamado){
                if($chamados[0] == ""){
                  echo '<h4>Ops! Tudo vazio por aqui...</h4>';
                }

                $partesDoChamado = explode("---", $chamado);
                
                // echo "<pre>";
                // print_r($partesDoChamado);
                // print_r($_SESSION["id"]);
                // //print_r($_SESSION["usuarios"]);
                // echo "</pre>";
                if(count($partesDoChamado) < 3){
                  continue;
                }
                
                if($_SESSION["perfil_id"] == 2){
                  if($_SESSION["id"] != $partesDoChamado[3]){
                      continue;
                  }                
                }

                
    
            ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $partesDoChamado[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo  $partesDoChamado[1]?></h6>
                  <p class="card-text"><?php echo  $partesDoChamado[2]?></p>

                </div>
              </div>
              <?php } ?> 
              

              <div class="row mt-5">
                <div class="col-6">
                
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>