<?php
require_once("classes/class.php");
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];


   

    $query="INSERT INTO contact_info(id,name,email,msg,info_date) VALUES(NULL,'".$name."','".$email."','".$msg."','".date('d-M-Y')."')";
	$connection->insertion($query);
    
echo"done";
   
   
    
?>