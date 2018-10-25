<?php
include_once("Classes/dbclasses/ImageDetails.php");
try 
{
if(isset($_POST['action']))
{
if($_POST['action']=="selectall")
{

        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectAllProduct();

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
if($_POST['action']=="one")
{

        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectOneProduct();

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
       
}if($_POST['action']=="two")
{

        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectTwoProduct();

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


// if($_POST['action']=="delete")
// {
//     var id=$_POST['id']

//         echo  $id;
       
// }



}
}
catch (Exception $e) 
{
    echo $e;
}
?>