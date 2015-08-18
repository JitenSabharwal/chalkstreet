<?php 
# login verification
require_once('./classes/database.php');
?>

<?php
 if(isset($_POST['Submit']))
 {
 	$user=$_POST['user'];
 	$pass=md5($_POST['pass']);
 	$query="SELECT * from users where username='$user'";
 	$db=new database();
 	$db->connect();
 	$result=$db->execute($query);
 	if(mysqli_num_rows($result)>0)
 	{

 		while($row=mysqli_fetch_array($result))
 		{
 			if(strcmp($row['username'],$user)==0 && strcmp($pass,$row['password'])==0)
 			{
 				session_start();
 				$_SESSION['user']=$user;
 				echo "1";
 			}
 		}
 		$db->disconnect();
 	}
 	else
 	{
 		echo "0";
 	}
 }
 else
{
	echo "0";
}

?>