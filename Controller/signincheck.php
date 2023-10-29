<?php 
     session_start();
     require_once('../Model/usermodel.php');
     $username = $_REQUEST['Username'];
     $password = $_REQUEST['Password'];
 
 
     if($username == "" || $password == ""){
         echo "null username/password!";   
     }else{
         
         $status = signinUser($username, $password);
         $status1 = signinCar($username, $password);
         if($status){
             $_SESSION['flag'] = "true";
             header("location: ../view/userhome.php");
         }elseif($status1){
            $_SESSION["flag"] = "true";
            echo"car";
         }else{
             echo "invaid user!";
         }
     }
?>