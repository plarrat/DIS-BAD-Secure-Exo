<?php 

define("PARAM_HOST", "localhost");
define("PARAM_PORT", "3306");
define("PARAM_BDD", "secure-cours");
define("PARAM_USER", "root");
define("PARAM_PSWD", "");

define("PREFIXE", "@23ti89");
define("SUFFIXE", "!Gg0)");

function getPDO(){
	return new PDO("mysql:host=".PARAM_HOST."; port=".PARAM_PORT."; dbname=".PARAM_BDD, PARAM_USER, PARAM_PSWD);

}

function Menu(){ ?>
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
			          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="form-profile.php">Formulaire Profile</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
			        </li>

			      </ul>
			    </div>
	  		</div>
		</nav>
  	</header>
<?php } 