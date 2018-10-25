<?php
include_once("Classes/dbclasses/ImageDetails.php");
try 
{
if(isset($_POST['action']))
{
if($_POST['action']=="selectall")
{

        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectAllProductAsc();

    $arr = Array();
    $inc = 0;

        while($row=mysqli_fetch_array($result2))
        {
            $jsonArrayObject = ( array('imagrUrl' => $row["imagrUrl"],'imageDescription' => $row["imageDescription"]));
            $arr[$inc] = $jsonArrayObject;
            $inc++;
           //  $rowdata[$inc]=$row["Name"];
        }
        $json_array = json_encode($arr);
        echo  $json_array;
       
}



 

}

if($_POST['action']=="safdsa")
{

        $imagedetails=new ImageDetails();
      

        // $result2=$imagedetails->();

    
       
}



 

}

}
catch (Exception $e) 
{
    echo $e;
}
?>