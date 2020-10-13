<?php
  session_start();

  if(is_array($_SESSION["usuarios"])){
    if(isset($_SESSION["usuario_cadastrado"])){
      echo 'Yes';
      array_push($_SESSION["usuarios"], $_SESSION["usuario_cadastrado"][0]);
      unset($_SESSION["usuario_cadastrado"]);
    }
  } else{
    $_SESSION["usuarios"] = array();
    array_push($_SESSION["usuarios"], array("id" => mt_rand(0, mt_getrandmax()), "email" => "admin@gmail.com", "senha" => "12345678", "perfil_id" => 1));
  }
  
  //unset($_SESSION["usuarios"]);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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

      <button id="sign-up" class="ml-auto btn btn-warning">Cadastrar-se</button>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
            <!-- método de requisição html, se omitido, por padrão eh o get
            action = destino para onde aqueles valores serão submetidos -->
              <form method="post" action="form_validacao.php">
                <div class="form-group">
                  <input autocomplete name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input autocomplete name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              <?php
                if(isset($_GET["login"]) && $_GET["login"] == "failed"){
              ?>

                  <div class="is-invalid text-danger text-center mt-2">
                      Usuário e/ou senha incorreto(s)
                  </div>

                <?php } 
                  else if(isset($_GET["logged"]) && $_GET["logged"] = "false"){  
                ?>
                  <div class="is-invalid text-danger text-center mt-2">
                      Favor realizar o login
                  </div>
                <?php } else if(isset($_GET["users"]) && $_GET["users"] = "cleaned"){?>
                  <div class="is-invalid text-danger text-center mt-2">
                    Usuários removidos <br> Favor logar com a conta de administrador
                  </div>
                <?php } else if(isset($_GET["signup"]) && $_GET["signup"] = "success"){?>
                  <div class="is-valid text-success text-center mt-2">
                    Usuário cadastrado <br> Favor logar com as credenciais informadas anteriormente
                  </div>
                <?php } ?>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script>
        signUp = document.getElementById("sign-up");
        signUp.addEventListener("click", () => {
          window.location.assign("sign_up.php")
        })
    </script>
  </body>
</html>