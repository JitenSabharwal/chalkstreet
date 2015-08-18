<script>
$(".seclink").click(function(){
		alert('wo');
		var d=$(this).data('value');
		alert(d);
		_viewopen(d);	
	});
</script>
<?php
# display table of courses
require_once('../classes/database.php');
?>
<table  class="table table-hover" style="text-align:center;">
<tr>
	<th>Sno</th>
	<th>Course Name</th>
	<th>Course Category</th>
	<th>Course Level</th>
	<th>Price</th>
	<th>View/Changes</th>
</tr>	
<?php
$i=1;
function display()
{
	echo "<tr>";
	echo "<td>".$GLOBALS['i']++."</td>";
	echo "<td>".$GLOBALS['c_name']."</td>";
	echo "<td>".$GLOBALS['c_category']."</td>";
	echo "<td>".$GLOBALS['c_level']."</td>";
	echo "<td>".$GLOBALS['c_price']."</td>";
	echo "<td><a class='seclink' data-value='".$GLOBALS['c_id']."' href='#'>View</a></td>";
	echo "</tr>";

}  
?>

<?php
	$query="SELECT * from course";
	$db=new database();
	$db->connect();
	$result=$db->execute($query);
	if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$c_id=$row['course_id'];
				$c_name=$row['c_name'];
				$c_category=$row['c_category'];
				$c_level=$row['c_level'];
				$c_price=$row['c_price'];
				display();
			}
		}
		else
		{
			echo "<tr><td colspan=6>No Inputs</td></tr>";
		}
?>
</table>
