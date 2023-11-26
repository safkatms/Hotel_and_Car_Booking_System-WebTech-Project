<?php
session_start();
require_once("../Model/bookingmodel.php");


$bookingstatus = 'Pending';

$carid = $_REQUEST['CarID'];

$carOwnername = $_REQUEST['Ownername'];

$brand = $_REQUEST['Brand'];

$model = $_REQUEST['Model'];

$totalprice = $_REQUEST['DailyRate'];

$name = $_REQUEST['UserFullName'];

$email = $_REQUEST['UserEmail'];

$mobile = $_REQUEST['UserMobile'];

$startdate = $_REQUEST['PickupDate'];

$enddate = $_REQUEST['DropoffDate'];

$location = $_REQUEST['Location'];







$status = CarBookingConfirm($carid,$carOwnername,$brand,$model,$name,$email,$mobile,$startdate,$enddate,$location,$bookingstatus,$totalprice);
if ($status) {
    header("location: ../view/userhome.php");
} else {
    echo "Booking Error";
}
