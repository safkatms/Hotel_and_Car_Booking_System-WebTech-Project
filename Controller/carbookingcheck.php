<?php
session_start();
require_once("../Model/bookingmodel.php");


$numberofroom = 0;
$bookingstatus = 'Pending';
$totalPrice = 0;

    $carid = $_REQUEST['CarID'];

    $brand = $_REQUEST['Brand'];

    $model = $_REQUEST['Model'];

    $dailyrate = $_REQUEST['DailyRate'];

    $name = $_REQUEST['UserFullName'];

    $email = $_REQUEST['UserEmail'];

    $mobile = $_REQUEST['UserMobile'];

    $startdate = $_REQUEST['PickupDate'];

    $enddate = $_REQUEST['DropoffDate'];

    $location = $_REQUEST['Location'];

    $totalprice = $_REQUEST['TotalPrice'];

    


    $totalPrice = $price ;
    $status=CarBookingConfirm($carid,$brand,$model,$name,$email,$mobile,$startdate,$enddate,$location,$bookingstatus,$totalprice);
    if ($status) {    
        header("location: ../view/userhome.php");
    }else{
        echo "Booking Error";
    }



?>