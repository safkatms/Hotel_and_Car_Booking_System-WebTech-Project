<?php 
     session_start();
     require_once('../Model/authmodel.php');
     $username = $_REQUEST['Username'];
     $password = $_REQUEST['Password'];
 
 
     if($username == "" || $password == ""){
         echo "Null username/password!";   
     }else{
         
         $status = signinUser($username, $password);
         if($status){
             $_SESSION['flag'] = "true";
         }else{
             echo "Password incorrect";
         }
     }
?>