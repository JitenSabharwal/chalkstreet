<?php
session_start();
require_once("../classes/database.php");
require_once("../classes/retrival.php");
		$db=new database();
		$db->connect();

?>
<?php

session_start();
if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die();
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["FileInput"]["size"] > 52428800000) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['FileInput']['type']))
		{
			//allowed file types
            case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html': //html file
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['FileInput']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$Random_Number      = rand(0, 9999999999); //Random number to be added to name.
	$v_name				=$_SESSION['name'];
    $v_detail 			=$_SESSION['detail'];
	$v_id 				=$_SESSION['v_id'];
	$s_id 				=$_SESSION['section'];
	$NewFileName 		= $v_id.$File_Ext; //new file name
	
	$query="INSERT INTO video(section_id, video_id,video_detail) VALUES('$s_id', '$v_id','$v_detail')";
				
					if(empty($db->execute($query)))
					{
						echo "0";
					}
					else
					{
						if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
						   {

							die('Success! File Uploaded.');
						}
						else
						{
							die('error uploading File!');
						}
	
					}
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}