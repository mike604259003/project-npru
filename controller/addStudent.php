<?php 
require('../model/function.php');

$con = new manageDB();
$date = date("d-m-Y");
$img= $_FILES['stu_image'];

if($img <> '') { 
$path="../view/images/";    
    $remove_these = array(' ','`','"','\'','\\','/','_');
    $newname = str_replace($remove_these, '', $_FILES['stu_image']['name']);
    
    $newname = time().'-'.$newname;
    $path_copy=$path.$newname;
    $path_link="images/".$newname;

    move_uploaded_file($_FILES['stu_image']['tmp_name'],$path_copy);

if(isset($_POST['stu_id'])){
    
        $stu_id = $_POST['stu_id'];
        $stu_type = $_POST['gender'];
        $stu_name = $_POST['stu_name'];
        $stu_major = $_POST['stu_major'];
        $stu_faculty = $_POST['stu_faculty'];
        
    
        $message = $con->insertStudent($stu_id,$stu_name,$stu_type, $stu_major,$stu_faculty,$newname);

        header( "location: ../view/index.php" );
        exit(0);
}

}


?>