<?php
class ConDB{
	private $host,$user,$pass,$db;
	public $conn;
	
	public function ConDB(){
		$this->host="localhost";
		$this->user="root";
		$this->pass="";
		$this->db="npru_chatbot";
		
		}
		
	public function connect(){
		$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$this->conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		//$this->conn->exec("set names utf8");
		}
	
	
	}
	//use
	// public $con= new ConDB();
	// public $con->connect();
	// public $con->conn;
?>