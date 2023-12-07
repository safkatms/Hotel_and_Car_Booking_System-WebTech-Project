<?php 
session_start();
require_once("../Model/bookingmodel.php");

$bookingID = $_REQUEST['id'];

$status = CancelHotelBooking($bookingID);
if($status)
{
    header("location: ../View/bookinghistory.php");
}else{
    echo "Error.";
}

?>