<?php

include_once("Classes/dbclasses/ImageDetails.php");


$output_dir = "uploads/";
if(isset($_FILES["myfile"]))
{
	$ret = array();
	
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{	

		$tages = $_POST["tags"];
		$category=$_POST['category'];
 	 	$fileName = $_FILES["myfile"]["name"];
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
 			$imagedetails=new ImageDetails();
    $imagedetails->setimageuploaddate(date("Y/m/d"));
 	$imagedetails->setimageDescription($tages);
    $imagedetails->setImagePositione(1);
    $imagedetails->setImagePath($output_dir.$fileName);
    $imagedetails->setImageName($fileName);
 
    $imagedetails->setimagecategory_field($category);
 
   
    $result=$imagedetails->Insert(); 
  
   
    	$ret[]= $fileName;
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["myfile"]["name"][$i];

	  		$tages = $_POST["tags"];
	$category=$_POST['category'];

		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
	$imagedetails=new ImageDetails();
    $imagedetails->setimageuploaddate(date("Y/m/d"));
 	$imagedetails->setimageDescription($tages);
    $imagedetails->setImagePositione(1);
    $imagedetails->setImagePath($output_dir.$fileName);
    $imagedetails->setImageName($fileName);
 
  $imagedetails->setimagecategory_field($category);

 
    $result=$imagedetails->Insert(); 
  
   

	  	$ret[]= $fileName;
	  }
	
	}
    echo json_encode($ret);
 }
 ?>