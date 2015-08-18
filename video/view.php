<?php 
	require_once("../classes/database.php");
	session_start();
	$db =new database();
	$db->connect();
?>
<div class="container">
    <div class="page-header">
        <h1 id="timeline">Timeline</h1>
    </div>
<ul class="timeline">

<?php

  function display()
  {
      $src="video/uploads/".$GLOBALS['video'].".mp4";
       $media='<div class="embed-responsive embed-responsive-16by9">'.
                  '<video class="embed-responsive-item" controls>'.
                    '<source src="'.$src.'" type="video/mp4">'.
                    'Your browser does not support HTML5 video.'.
                  '</video>'.
                  '</div>';

      $node = '<li class="timeline-inverted">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">'.$GLOBALS['video_detail'].'</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>'.$media.'</p>
            </div>
          </div>
        </li>';
        echo $node;
    
  }
?>
<?php
	$course_id=$_SESSION['course_id'];
	$query="SELECT * from section inner join video on (section.section_id=video.section_id) where section.course_id='$course_id'";
	$result=$db->execute($query);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
    {
      $video=$row['video_id'];
      $video_detail=$row['video_detail'];
      $section_name=$row['s_name'];
      $section_detail=$row['s_detail'];
      display();

    }
	}
  else
  {
   
  }
?>

</div>
    	

</ul>
</div>