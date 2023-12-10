<?php
require_once("../model/hotelownermodel.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id =  $_POST['id'];
    $room = $_POST['room'];
    $PricePerNight = $_POST['PricePerNight'];
    $TotalRooms = $_POST['TotalRooms'];
    $AvailableRooms = $_POST['AvailableRooms'];

    if ($AvailableRooms > $TotalRooms) {
        echo "Available rooms can't be greater than total rooms.";
    } else {
        $status = editRoomInfo($id, $room, $PricePerNight, $TotalRooms, $AvailableRooms);
        
        if ($status) {
            header("Location: ../View/manageroom.php");
            exit;
        } else {
            echo "Error";
        }
    }
}
?>
