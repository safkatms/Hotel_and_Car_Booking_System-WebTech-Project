<?php
require_once('../Model/hotelownermodel.php');
$status = $_REQUEST['Status'];
$id = $_REQUEST['BookingID'];
$rid = $_REQUEST['RoomTypeID'];
$nroom = $_REQUEST['NumberOfRooms'];

$change = editBookingStatus($id,$status,$rid,$nroom);
if($change){
    header('location:../View/hotelmanagebooking.php');
}else{
    
}


?>