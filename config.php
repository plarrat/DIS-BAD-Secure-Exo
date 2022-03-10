<?php 

define("PARAM_HOST", "localhost");
define("PARAM_PORT", "3306");
define("PARAM_BDD", "secure-cours");
define("PARAM_USER", "root");
define("PARAM_PSWD", "");

function getPDO(){
	return new PDO("mysql:host=".PARAM_HOST."; port=".PARAM_PORT."; dbname=".PARAM_BDD, PARAM_USER, PARAM_PSWD);

}