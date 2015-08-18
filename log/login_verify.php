<?php 
# login verification
require_once('../classes/database.php');
?>

<?php
 if(isset($_POST['Submit']))
 {
 	$user=$_POST['user'];
 	//echo $_POST['pass'] ;
 	$pass=md5($_POST['pass']);
 	$query="SELECT * from users where user='$user'";
 	$db=new database();
 	$db->connect();
 	$result=$db->execute($query);
 		while($row=mysqli_fetch_array($result))
 		{
 			if(strcmp($row['user'],$user)==0 && strcmp($pass,$row['password'])==0)
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

?>