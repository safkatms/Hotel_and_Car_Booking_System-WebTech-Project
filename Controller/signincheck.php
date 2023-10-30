<?php 
     session_start();
     require_once('../Model/usermodel.php');
     require_once('../Model/ownermodel.php');
     $username = $_REQUEST['Username'];
     $password = $_REQUEST['Password'];
 
 
     if($username == "" || $password == ""){
         echo "null username/password!";   
     }else{
         
         $status = signinUser($username, $password);
         $status1 = signinHotelOwner($username, $password);
         if($status){
             $_SESSION['flag'] = "true";
             header("location: ../view/userhome.php");
         }elseif($status1){
            $_SESSION["flag"] = "true";
            header("location: ../view/hotelownerhome.php");
         }else{
             echo "invaid user!";
         }
     }
?>