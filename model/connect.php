<?php

class database extends PDO {
	public $host="localhost";
	public $bd="cg_db";
	public $password="";
	public $user="root";
	public $connection;
	public $error;
	public $repconnection;

    public function __construct(){

    	try{
    		$this->connection=parent::__construct("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->password);
    		$this->repconnection=true;
    		$this->error="";
    	}
    	catch(PDOException $e){
    		$this->error="There's something wrong in the line number:".$e->getLine()." <br><br> Error: ".$e->getMessage();
    	}
    }




    public function getConnection(){
    	return $this->repconnection;
    }


    public function getConnectionError(){
    	return $this->error;
    }
} 
?>