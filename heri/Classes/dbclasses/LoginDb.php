<?php
include_once("database.inc.php");
class LoginDb
{


function LoginDb()
{
$this->database=new Database();
}
//


function userLogin($username,$password)
{
    $sql="SELECT * FROM users where username='$username' and password='$password'";
    $result=$this->database->db_selectData($sql);
    return $result;
}


}
?>