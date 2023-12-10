<?php 

    session_start();
     require_once('../Model/hotelownermodel.php');
     require_once('../Model/authmodel.php');
    
     $ownerusername=$_SESSION['username'];
    $hotelname = $_REQUEST['Hotelname'];
    $hoteladdress = $_REQUEST['Hoteladdress'];
    $city = $_REQUEST['City'];
    $rating = (isset($_REQUEST['Rating'])) ? $_REQUEST['Rating'] : '';

    $specialCharacters = '!@#$%^&*()+=-[]{}|;:,\"<>?~`';
 
     if($ownerusername == "" || $hotelname == "" || $city == ""|| $rating == "") {
         echo "Please Select all fields!";   
     }else if(strlen($hotelname) < 3)
      {
         echo "Hotel Name must be greater than 3 letter ";
     }
     
     else if (strpbrk($hotelname, $specialCharacters) !== false) {
        echo "Hotel Name cannot contain special characters.";
    }else{
         
         $status = editHotelInfo($hotelid,$ownerusername,$hotelname,$hoteladdress,$city,$rating);
         if($status){
             header("location: ../View/managehotel.php");
         }else{
             echo "invaid user!";
         }
     }
