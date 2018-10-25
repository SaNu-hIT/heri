<?php

// Include and create instance of db class
include_once("Classes/dbclasses/ImageDetails.php");
     $imagedetails=new ImageDetails();

// Get images id and generate ids array
$idArray = explode(",",$_POST['ids']);


// echo $idArray;
// Update images order
$imagedetails->updateOrder($idArray);

?>