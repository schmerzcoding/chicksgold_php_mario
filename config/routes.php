<?php
	
	function chargeController($controller){
		
		$controllerName = ucwords($controller)."Controller";
		$controllerFile = 'controller/'.ucwords($controller).'.php';
		
		if(!is_file($controllerFile)){
			
			$controllerFile= 'controller/'.MAIN_CONTROLLER.'.php';
			
		}
		require_once $controllerFile;
		$control = new $controllerName();
		return $control;
	}
	
	function chargeAction($controller, $action, $id = null){
		
		if(isset($action) && method_exists($controller, $action)){
			if($id == null){
				$controller->$action();
				} else {
				$controller->$action($id);
			}
			} else {
			$controller->MAIN_ACTION();
		}	
	}
?>