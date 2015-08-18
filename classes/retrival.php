<?php 
// This class is for retrieving values from database
	require_once("database.php");
?>
<?php
	class retrieval
	{
			private $id;
			private $id_no;
			private $row;
			function __construct()
			{

			}
			function courses()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(course_id) as maximum from course");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="COUR00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			function section()
			{
				$db=new database();
				$db->connect();
				$this->id=$db->execute("SELECT max(section_id) as maximum from section");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="SEC00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			function video()
			{
				$db=new database();
				$db->connect();
				$this->id=$db->execute("SELECT max(video_id) as maximum from video");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="VID00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
			
	}		
?>