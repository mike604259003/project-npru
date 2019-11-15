<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if ($_GET['page'] == "addstudent")
		{
	        include 'view/AddStudent.php';
		}
		
	}
}

?>