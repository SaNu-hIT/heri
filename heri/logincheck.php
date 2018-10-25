<?php
include_once("Classes/dbclasses/LoginDb.php");    

try 
{
$msg = '';
            
          if (!empty($_POST['username']) 
               && !empty($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];


$userlogin = new LoginDb();
 $arr = Array();
 
 $result = $userlogin->userLogin($username,$password); 
   $row  = mysqli_fetch_array($result);
   if(is_array($row)) {

    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION["user_id"] = $row['user_id'];
    $msg = "Login success";


    $jsonArrayObject = ( array('Message' => $msg,'success' => "true"));
    $arr = $jsonArrayObject;

   } else {
   $msg = "Invalid Username or Password!";
    $jsonArrayObject = ( array('Message' => $msg,'success' => "false"));
    $arr = $jsonArrayObject;
   }
}
else{
              $msg ="validation error";
                 $jsonArrayObject = ( array('Message' => $msg,'success' => "false"));
                $arr = $jsonArrayObject;
            }


        $json_array = json_encode($arr);
        echo  $json_array;


         }
         catch (Exception $e) 
{
    echo $e;
}
?>