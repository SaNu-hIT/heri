<?php

include_once("Classes/dbclasses/ImageDetails.php");
$output_dir = "uploads/";


        
if(isset($_FILES['imageupdate']))
{


    
	$ret = array();
	
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
	$error =$_FILES["imageupdate"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["imageupdate"]["name"])) //single file
	{		$itemid = $_POST["id"];
$imageurl = $_POST["imageurl"];
		$tages = $_POST["tags"];
		$category=$_POST['Categoryid'];
 	 	$fileName = $_FILES["imageupdate"]["name"];



 	 	
 		move_uploaded_file($_FILES["imageupdate"]["tmp_name"],$output_dir.$fileName);
 			$imagedetails=new ImageDetails();
    $imagedetails->setimageuploaddate(date("Y/m/d"));
 	$imagedetails->setimageDescription($tages);
    $imagedetails->setImagePositione(1);
if ($imageurl=="") {
 $imagedetails->setImagePath($output_dir.$fileName);
    $imagedetails->setImageName($fileName);	# code...
}
else
{
	 $imagedetails->setImagePath($imageurl);
    $imagedetails->setImageName($imageurl);	# code...

}
   
 
    $imagedetails->setimagecategory_field($category);
  // $imagedetails->setimageId($itemid);

    $result=$imagedetails->Update($itemid); 

  
   
    	$ret[]= $result;
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["imageupdate"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$itemid = $_POST["id"];
	  	$fileName = $_FILES["imageupdate"]["name"][$i];
	  		$tages = $_POST["tags"];
	$category=$_POST['category'];

		move_uploaded_file($_FILES["imageupdate"]["tmp_name"][$i],$output_dir.$fileName);
	$imagedetails=new ImageDetails();
    $imagedetails->setimageuploaddate(date("Y/m/d"));
 	$imagedetails->setimageDescription($tages);
    $imagedetails->setImagePositione(1);
    $imagedetails->setImagePath($output_dir.$fileName);
    $imagedetails->setImageName($fileName);
  $imagedetails->setimagecategory_field($category);
  // $imagedetails->setimageId($itemid);

     $result=$imagedetails->Update($itemid); 

	  	$ret[]= $result;
	  }
	
	}
    echo json_encode($ret);
 }
 else
 {

     echo "No file selected";
 }
 ?>