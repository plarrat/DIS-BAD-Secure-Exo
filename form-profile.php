<?php 

include("./config.php");

$bdd = getPDO();
$req = "SELECT * FROM utilisateur WHERE id = 1";
$res = $bdd->query($req);

$u = $res->fetch(PDO::FETCH_ASSOC);

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
  	<?php Menu(); ?>
    
  	<main class="mt-5">
  		<section class="container">
  			<div class="row">
  				<div class="offset-3 col-md-6">

  					<h1>Formulaire Profile</h1>
  					<hr>

  					<form action="profile.php?action=modif" method="POST">

  						<input type="hidden" name="id" value="1">

  						<article class="form-group">
  							<label>Prénom</label>
  							<input type="text" name="prenom" class="form-control" value="<?php echo $u["prenom"]; ?>" required>
  						</article>

  						<article class="form-group">
  							<label>Nom</label>
  							<input type="text" name="nom" class="form-control" value="<?php echo $u["nom"]; ?>" required>
  						</article>

  						<article class="form-group">
  							<label>Login</label>
  							<input type="text" name="login" class="form-control" value="<?php echo $u["login"]; ?>" required>
  						</article>

  						<article class="form-group">
  							<label>Commentaire</label>
  							<textarea name="commentaire" id="" cols="30" rows="10" class="form-control"><?php echo $u["commentaire"]; ?></textarea>
  						</article>

  						<hr>

  						<button class="btn btn-secondary" type="reset">Annuler</button>
  						<button class="btn btn-primary" type="submit">Enregistrer</button>
  					</form>


  				</div>
  			</div>
  		</section>
  	</main>
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>