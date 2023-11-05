<?php
require_once '../Model/db.php';

function HotelSearch($city,$room,$checkin,$checkout)
{
    $con = getConnection();
    $sql = "SELECT h.*, rt.* FROM hotel_info h 
    INNER JOIN roomtype rt ON h.HotelID = rt.HotelID
    WHERE h.City = '{$city}' AND rt.TypeName = '{$room}' AND rt.AvailableRooms > 0";
    $result = mysqli_query($con, $sql);
    $hotels = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotels, $row);
        setcookie('city', $city, time() + 3600, '/');
        setcookie('checkin', $checkin, time() + 3600, '/');
        setcookie('checkout', $checkout, time() + 3600, '/');
        setcookie('room', $room, time() + 3600, '/');
    }

    return $hotels;
}

?>