<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/searchingmodel.php';

    if (isset($_POST['city'], $_POST['checkin'], $_POST['checkout'], $_POST['room'], $_POST['sort'])) {
        $city = $_POST['city'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $room = $_POST['room'];
        $sortOrder = $_POST['sort'];

        $hotels = HotelSearch($city, $room, $checkin, $checkout, $sortOrder);

        echo json_encode($hotels);
    } 
?>
