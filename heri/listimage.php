<?php
include_once("Classes/dbclasses/ImageDetails.php");
try 
{
if(isset($_POST['action']))
{

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 


if($_POST['action']=="selectall")
{

        $imagedetails=new ImageDetails();
      

        $result2=$imagedetails->SelectAllProduct();

    $arr = Array();
    $inc = 0;
       $arr['successmessage']=( array('message' => "User  login",'success' => true));
       $i=0;
        while($row=mysqli_fetch_array($result2))
        {
            $jsonArrayObject = ( array( 'slno'=> ++$i, 'imageId' => $row["imageId"],'imagrUrl' => $row["imagrUrl"],'imageName' => $row["imageName"],'imageposition' => $row["imageposition"],'imageDescription' => $row["imageDescription"],'lastdate' => $row["lastdate"],'category_field' => $row["category_field"]));
            $arr['data'][$inc] = $jsonArrayObject;
            $inc++;
           //  $rowdata[$inc]=$row["Name"];
        }

         
        $json_array = json_encode($arr);
        echo  $json_array;
       
}
} 
else {
  

    $arr['successmessage']=( array('message' => "User not login",'success' => false));
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