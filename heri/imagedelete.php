<?php
include_once("Classes/dbclasses/ImageDetails.php");
try 
{
if(isset($_POST['action']))
{
if($_POST['action']=="delete")
{
         $id=$_POST['id'];
        $imagedetails=new ImageDetails();
          $result=$imagedetails->DeleteImage($id); 
        echo  $result;
       
}
}
}
catch (Exception $e) 
{
    echo $e;
}
?>