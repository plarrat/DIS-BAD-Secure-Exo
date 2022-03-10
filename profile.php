<?php 

include("./config.php");

$bdd = getPDO();

// Traitement Formulaire
if(isset($_GET["action"]) && $_GET["action"] === "modif"){
	$id = $_POST["id"];
	$prenom 			= htmlentities($_POST["prenom"]);
	$nom 					= htmlentities($_POST["nom"]);
	$login 				= htmlentities($_POST["login"]);
	$commentaire 	= htmlentities($_POST["commentaire"]);

	$bind = array();
	$bind["id"] 					= $id;
	$bind["prenom"] 			= $prenom;
	$bind["nom"] 					= $nom;
	$bind["login"] 				= $login;
	$bind["commentaire"] 	= $commentaire;

	$req = "UPDATE utilisateur 
					set prenom = :prenom, 
					nom = :nom, 
					login = :login, 
					commentaire = :commentaire
					WHERE id = :id
					";
	$res = $bdd->prepare($req);
	$res->execute($bind);	

	header("Location: profile.php");			
}

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

  					<h1>Profile Utilisateur</h1>
  					<hr>

  					<form>


  						<article class="form-group">
  							<label>Prénom</label>
  							<input type="text" name="prenom" class="form-control" value="<?php echo $u["prenom"]; ?>" readonly>
  						</article>

  						<article class="form-group">
  							<label>Nom</label>
  							<input type="text" name="nom" class="form-control" value="<?php echo $u["nom"]; ?>" readonly>
  						</article>

  						<article class="form-group">
  							<label>Login</label>
  							<input type="text" name="login" class="form-control" value="<?php echo $u["login"]; ?>" readonly>
  						</article>

  						<br>
  						<article class="form-group">
  							<label>Commentaire</label>
  							<hr>
  							<?php echo $u["commentaire"]; ?>
  						</article>

  						<hr>

  					</form>
  				</div>
  			</div>
  		</section>
  	</main>
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>