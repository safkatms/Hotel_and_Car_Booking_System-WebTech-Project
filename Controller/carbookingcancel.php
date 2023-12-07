<?php 
session_start();
require_once("../Model/bookingmodel.php");

$bookingID = $_REQUEST['id'];

$status = CancelCarBooking($bookingID);
if($status)
{
    header("location: ../View/bookinghistory.php");
}else{
    echo "Error.";
}

?>