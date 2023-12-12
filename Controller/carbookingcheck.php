<?php
session_start();
require_once("../Model/bookingmodel.php");

// Initialize variables
$bookingstatus = 'Pending';
$carid = $_REQUEST['CarID'];
$carOwnername = $_REQUEST['Ownername'];
$brand = $_REQUEST['Brand'];
$model = $_REQUEST['Model'];
$dailyRate = $_REQUEST['DailyRate'];
$name = $_REQUEST['UserFullName'];
$email = $_REQUEST['UserEmail'];
$mobile = $_REQUEST['UserMobile'];
$startdate = $_REQUEST['PickupDate'];
$enddate = $_REQUEST['DropoffDate'];
$location = $_REQUEST['Location'];
$pickupDateTime = new DateTime($startdate);
$dropoffDateTime = new DateTime($enddate);

$interval = $pickupDateTime->diff($dropoffDateTime);
$numberOfDays = $interval->days;

if($pickupDateTime >= $dropoffDateTime) {
    echo "Drop-off date must be after the Pick-up date.";
} else {
    $totalprice = $numberOfDays * $dailyRate;

    $status = CarBookingConfirm($carid, $carOwnername, $brand, $model, $name, $email, $mobile, $startdate, $enddate, $location, $bookingstatus, $totalprice);

    if ($status) {
        header("location: ../view/bookinghistory.php");
    } else {
        echo "Booking Error";
    }
}
?>
