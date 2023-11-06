<?php 
     session_start();
     require_once('../Model/usermodel.php');
     require_once('../Model/hotelownermodel.php');
     $ownerusername=$_COOKIE['username'];
    $hotelname = $_REQUEST['Hotelname'];
    $hoteladdress = $_REQUEST['Hoteladdress'];
    $city = $_REQUEST['City'];
    $rating = (isset($_REQUEST['Rating'])) ? $_REQUEST['Rating'] : '';
 
     if($ownerusername == "" || $hotelname == "" || $city == ""|| $rating == "") {
         echo "null value!";   
     }else{
         
         $status = hotelregistration($ownerusername,$hotelname,$hoteladdress,$city,$rating);
         if($status){
             $_SESSION['flag'] = "true";
             header("location: ../View/managehotel.php");
         }else{
             echo "invaid user!";
         }
     }
?>