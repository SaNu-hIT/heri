<?php
/**
 * Created by PhpStorm.
 * User: intellyze labs
 * Date: 10-05-2017
 * Time: 11:33 AM
 */

session_start();
if(!isset($_SESSION["username"])) {
    $_SESSION["username"]="";
    $_SESSION["loggedin"]=false;
    $_SESSION["user_id"]="";
    session_destroy();
    header('Location: index');
} 
else{
    $_SESSION["username"]="";
    $_SESSION["loggedin"]=false;
    $_SESSION["user_id"]="";
    session_destroy();
    header('Location: index');
}