<?php
session_start();
require_once("../Model/bookingmodel.php");


$numberofroom = 0;
$bookingstatus = 'Pending';
$totalPrice = 0;


    $hotelID = $_REQUEST['HotelID'];

    $roomID = $_REQUEST['RoomTypeID'];

    $hotelname = $_REQUEST['HotelName'];

    $roomtype = $_REQUEST['RoomType'];

    $price = $_REQUEST['PricePerNight'];

    $userfullname = $_REQUEST['UserFullName'];

    $useremail = $_REQUEST['UserEmail'];

    $usermobile = $_REQUEST['UserMobile'];

    $checkin = $_REQUEST['CheckinDate'];

    $checkout = $_REQUEST['CheckoutDate'];

    $numberofroom = $_REQUEST['NumberofRoom'];

    $availabe = $_REQUEST['Available'];


if ( $numberofroom == ''){
    echo'Number of room is empty';
}elseif( $numberofroom > $availabe){
    echo "Number of room can't be greater" ;
}else{
    $totalPrice = $price * $numberofroom;
    $status=HotelBookingConfirm($hotelname,$hotelID,$roomtype,$roomID,$userfullname,$useremail,$usermobile,$checkin,$checkout,$numberofroom,$bookingstatus,$totalPrice);
    if ($status) {    
        header("location: ../view/userhome.php");
    }else{
        echo "Booking Error";
    }

}

?>
