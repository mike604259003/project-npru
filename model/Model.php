<?php
include_once('classConDB.php');

class Model {
    private $conDB;
	public function ManageDB(){
			$con= new ConDB();
			$con->connect();
			$this->conDB = $con->conn;
    }
    
    public function insertStudent($id,$name,$type,$major,$faculty,$pic){
			
        $sql = "INSERT INTO `student` VALUES ('".$id."',".$type.",'".$name."','".$major."','".$faculty."','".$pic."')";
        $stmt = $this->conDB->prepare($sql);
        
        if($stmt->execute()){
            $message = "insert Succesfully.";
        }else{
            $message = "insert fail.";
        }
        return $message;
    }


}

?>