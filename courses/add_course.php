<?php
#cousrse addition
require_once("../classes/database.php");
require_once("../classes/retrival.php");
?>
<?php
if(isset($_REQUEST['Submit']))
{
	$c_name=$_REQUEST['name'];
	$c_category=$_REQUEST['category'];
	$c_level=$_REQUEST['level'];
	$c_price=$_REQUEST['price'];
	$db=new database();
	$db->connect();
	$rt=new retrieval();
	$c_id=$rt->courses();
	$query="INSERT INTO course(course_id,c_name,c_category,c_level,c_price) VALUES('$c_id','$c_name','$c_category','$c_level','$c_level')";
	if(empty($db->execute($query)))
	{
		echo "0";
	}
	else
	{
		echo "1";
	}
	$db->disconnect();
}
else
{
	echo "0";
}

?>