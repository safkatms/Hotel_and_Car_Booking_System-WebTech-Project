<?php 
session_start();


require_once('../Model/hotelownermodel.php');




$hotelid = $_SESSION['HotelID'];
$room = $_REQUEST['room'];
$pricepernight = $_REQUEST['PricePerNight'];
$totalrooms = $_REQUEST['TotalRooms'];
$availablerooms = $_REQUEST['AvailableRooms'];

if ($hotelid == "" || $room == "" || $pricepernight == "" || $totalrooms == "" || $availablerooms == "") {
    echo json_encode(["success" => false, "message" => "Please fill all the fields."]);
} elseif ($availablerooms > $totalrooms) {
    echo json_encode(["success" => false, "message" => "Available rooms can't be greater than total rooms."]);
} else {
    $status = addrooms($hotelid, $room, $pricepernight, $totalrooms, $availablerooms);
    if ($status) {
        $updatedRooms = getroomInfo();
        echo json_encode(["success" => true, "message" => "Room added successfully.", "rooms" => $updatedRooms]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid user or error in adding room."]);
    }
}
?>
