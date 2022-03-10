<?php 

include("./config.php");

 ?>

<!DOCTYPE HTML>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Application 1</title>
  </head>

  <body>
  	<header>
  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  		<div class="container-fluid">
	    		<a class="navbar-brand" href="#">Secure App 1</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
			        </li>
			      </ul>
			    </div>
	  		</div>
		</nav>
  	</header>
    
  	<main class="mt-5">
  		<section class="container">
  			<div class="row">
  				<div class="offset-3 col-md-6">

  					<h1>Formulaire de connexion</h1>
  					<hr>

  					<form action="validation.php?action=connexion" method="POST">
  						
  						<article class="form-group">
  							<label>Nom d'utilisateur</label>
  							<input type="text" name="login" class="form-control">
  						</article>

  						<article class="form-group">
  							<label>Mot de passe</label>
  							<input type="password" name="mdp" class="form-control">
  						</article>

  						<hr>

  						<button type="submit" class="btn btn-primary">Connexion</button>
  					</form>
  				</div>
  			</div>
  		</section>
  	</main>
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>