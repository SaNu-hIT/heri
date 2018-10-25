<?php
include_once("Classes/dbclasses/ImageDetails.php");
try 
{
if(isset($_POST['action']))
{
if($_POST['action']=="selectbyid")
{
$id=$_POST['code'];
        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectImageDetailsById($id);

    $arr = Array();
   

        while($row=mysqli_fetch_array($result2))
        {
            $jsonArrayObject = ( array('imageId' => $row["imageId"],'imagrUrl' => $row["imagrUrl"],'imageName' => $row["imageName"],'imageposition' => $row["imageposition"],'imageDescription' => $row["imageDescription"],'lastdate' => $row["lastdate"],'category_field' => $row["category_field"]));
            $arr = $jsonArrayObject;
           
           //  $rowdata[$inc]=$row["Name"];
        }
        $json_array = json_encode($arr);
        echo  $json_array;
       
}




}
}
catch (Exception $e) 
{
    echo $e;
}
?>