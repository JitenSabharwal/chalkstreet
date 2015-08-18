<?php
#insert section
session_start();
require_once("../classes/database.php");
require_once("../classes/retrival.php");
		$db=new database();
		$db->connect();

?>
<?php

	if(isset($_REQUEST['Submit']))
	{
		$s_name=$_REQUEST['name'];
		$s_details=$_REQUEST['detail'];
		$c_name=$_REQUEST['course'];
		
		$query="SELECT * from course where c_name='$c_name'";
		
		$result=$db->execute($query);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$c=$row['course_id'];
			//	echo $c;
			}
			
			
			$c_id=$GLOBALS['c'];
			$_SESSION['course_id']=$c_id;
			$rt=new retrieval();
			$s_id=$rt->section();
			
			$query="INSERT INTO section(section_id, course_id, s_name, s_detail)
			        VALUES('$s_id', '$c_id', '$s_name', '$s_details')";
			
			if(empty($db->execute($query)))
			{
				echo "0";
			}
			else
			{
				echo "1";
			}
		}
		else
		{
			echo "not working";
		}
		
	}
	else
	{
		echo "0";
	}	

?>