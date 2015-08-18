<?php
require_once("../classes/database.php");
	$db=new database();
	$db->connect();	
 	$term=$_GET["term"];
 
	 $query="SELECT * FROM section where s_name like '%$term%' order by s_name";
	 $result=$db->execute($query);
	 $json=array();
	    while($student=mysqli_fetch_array($result)){
	         $json[]=array(
	                    'value'=> $student["s_name"]
	                    
	                        );
	    }
	 
	 echo json_encode($json);	
?>