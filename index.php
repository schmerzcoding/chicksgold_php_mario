<?php

require_once "config/config.php";
require_once "config/routes.php";
require_once "model/connect.php";


$connection=new database();
if($connection->getConnection()==false){

echo "<h3>".$connection->getConnectionError()."<h3>";

}

else{

if(isset($_GET['c'])){

	$controller = chargeController($_GET['c']);

	if(isset($_GET['a'])){
		if(isset($_GET['id'])){
			chargeAction($controller, $_GET['a'], $_GET['id']);
		} else {
			chargeAction($controller, $_GET['a']);
		}
	} else {
		chargeAction($controller, ACCION_PRINCIPAL);
	}

} else {

	$controller = chargeController(MAIN_CONTROLLER);
	$actionTmp = MAIN_ACTION;
	$controller->$actionTmp();
}
}
?>