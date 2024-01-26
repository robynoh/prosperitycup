<?php
require_once("classes/class.php");
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();




   
	$data=array();

    $query="SELECT * FROM `today_match` order by match_id ASC ";
	$result=$connection->retrieve($query);
	$rows=$connection->arrayFetch($result);
	$num=$connection->numRows($result);
	if($num>0){
	
	    
	   
	    
	foreach($rows as $row){
    
    
   	$data["data"][]=$row;
  
	}

   
	
	}	
	
echo json_encode($data);

?>