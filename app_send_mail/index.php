<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container ">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold  mb-0 pt-0">
						<form method="post" action="processa_envio.php">

							<?php 
								if(isset($_GET["badInput"]) && $_GET["badInput"] == "true"){
							?>
								<div class="rounded pb-3 pt-3 bg-warning form-group text-center" id="alert">
									<h4 class="mb-0 mt-0 pb-0 pt-0"> &#128680; E-mail não enviado &#128680;</h4>
									Verifique se todos os campos estão preenchidos
								</div>
							<?php } elseif(isset($_GET["success"]) && $_GET["success"] == "true") { ?>
								<div class="rounded pb-3 pt-3 bg-success form-group text-center" id="alert">
									<h4 class="mb-0 mt-0 pb-0 pt-0"> &#9989; E-mail enviado &#9989;</h4>
									E-mail enviado com sucesso!
								</div>
							<?php } elseif (isset($_GET["success"]) && $_GET["success"] == "false") { ?>
								<div class="rounded pb-3 pt-3 bg-danger form-group text-center" id="alert">
									<h4 class="mb-0 mt-0 pb-0 pt-0"> &#10060; E-mail não enviado &#10060;</h4>
									Não foi possível enviar seu e-mail. Tente novamente mais tarde.
								</div>
							<?php }?>

							<div class="form-group">
								<label for="para">Para</label>
								<input type="email" required class="form-control" name="para" id="para" placeholder="joao@dominio.com.br">
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input type="text" required class="form-control" name="assunto" id="assunto" placeholder="Assundo do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea class="form-control" required name="mensagem" id="mensagem"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

		<script>
			url = window.location.href
			if( url.indexOf("?") != -1 ){

				var alertID = document.getElementById("alert");
				setInterval(() => {
					alertID.style.transition = "all 2s";
					alertID.style.opacity = "0";
					
				}, 10000);
				setInterval(() => {
					alertID.style.display = "none"
				}, 12000);
			};

			
				
			

			

		</script>
	</body>
</html>