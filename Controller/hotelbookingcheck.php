<?php
session_start();
require_once("../Model/bookingmodel.php");

$numberofroom = 0;
$bookingstatus = 'Pending';
$totalPrice = 0;

$hotelID = $_REQUEST['HotelID'];
$roomID = $_REQUEST['RoomTypeID'];
$hotelname = $_REQUEST['HotelName'];
$hoteladdress = $_REQUEST['HotelAddress'];
$roomtype = $_REQUEST['RoomType'];
$price = $_REQUEST['PricePerNight'];
$userfullname = $_REQUEST['UserFullName'];
$useremail = $_REQUEST['UserEmail'];
$usermobile = $_REQUEST['UserMobile'];
$checkin = $_REQUEST['CheckinDate'];
$checkout = $_REQUEST['CheckoutDate'];
$numberofroom = $_REQUEST['NumberofRoom'];
$availabe = $_REQUEST['Available'];

if ($numberofroom == '') {
    echo 'Number of room is empty';
} elseif ($numberofroom > $availabe) {
    echo "Number of room can't be greater";
} else {
    $checkinDateTime = new DateTime($checkin);
    $checkoutDateTime = new DateTime($checkout);
    $interval = $checkinDateTime->diff($checkoutDateTime);
    $numberOfNights = $interval->days;
    
    $totalPrice = $price * $numberofroom * $numberOfNights;

    $status = HotelBookingConfirm($hotelname, $hotelID, $hoteladdress, $roomtype, $roomID, $userfullname, $useremail, $usermobile, $checkin, $checkout, $numberofroom, $bookingstatus, $totalPrice);
    
    if ($status) {    
        header("location: ../view/bookinghistory.php");
    } else {
        echo "Booking Error";
    }
}
?>
