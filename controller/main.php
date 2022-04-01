<?php
	
	class mainController  {
		
		public function __construct(){
			require_once "model/mainModel.php";
		}
		
		public function index(){
			 $accounts_table=new main_model();
         /* $accounts_rows=$accounts_table->show_rows();*/
			require_once "view/main.php";	
		}
		
	}
?>
