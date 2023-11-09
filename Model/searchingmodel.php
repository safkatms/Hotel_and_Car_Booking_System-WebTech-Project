<?php
require_once '../Model/db.php';

function HotelSearch($city, $room, $checkin, $checkout)
{
    $con = getConnection();
    $sql = "SELECT h.*, rt.* FROM hotel_info h 
    INNER JOIN roomtype rt ON h.HotelID = rt.HotelID
    WHERE h.City = '{$city}' AND rt.TypeName = '{$room}' AND rt.AvailableRooms > 0";
    
    $result = mysqli_query($con, $sql);
    $hotels = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotels, $row);
    }

    // Store the search parameters in the session
    $_SESSION['checkin'] = $checkin;
    $_SESSION['checkout'] = $checkout;
    $_SESSION['city'] = $city;
    $_SESSION['room'] = $room;

    return $hotels;
}


function CarSearch($pickup_location,$pickup_date,$dropoff_date)
{
    $AvailabilityStatus = 'Available';
    $con = getConnection();
    $sql = "SELECT * FROM car_info WHERE AvailabilityStatus='{$AvailabilityStatus}' AND Location='{$pickup_location}'";
    $result = mysqli_query($con, $sql);
    $cars = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($cars, $row);
    }
    $_SESSION['location'] = $pickup_location;
    $_SESSION['pickup'] = $pickup_date;
    $_SESSION['dropoff'] = $dropoff_date;
    return $cars;
}


?>