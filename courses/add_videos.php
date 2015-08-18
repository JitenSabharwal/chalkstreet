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
		
			$v_name=$_REQUEST['name'];
			$v_detail=$_REQUEST['detail'];
			$v_section=$_REQUEST['section'];
			$rt=new retrieval();
			$v_id=$rt->video();
			
			$query="SELECT * from section where s_name='$v_section'";
			
			$result=$db->execute($query);
			
			if(mysqli_num_rows($result)>0)
			{
					while($row=mysqli_fetch_array($result))
					{
						$s=$row['section_id'];
					//	echo $c;
					}
					$_SESSION['name']=$v_name;
					$_SESSION['detail']=$v_detail;
					$_SESSION['v_id']=$v_id;
					$_SESSION['section']=$GLOBALS['s'];			
			}
	}
	else
	{
		echo "0";
	}	

?>