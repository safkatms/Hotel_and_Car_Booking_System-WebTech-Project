<?php
require_once '../Model/db.php';

function HotelSearch($city, $room, $checkin, $checkout, $sortOrder = '') {
    $con = getConnection();
    $sql = "SELECT h.*, rt.* FROM hotel_info h 
            INNER JOIN roomtype rt ON h.HotelID = rt.HotelID
            WHERE h.City = '{$city}' AND rt.TypeName = '{$room}' AND rt.AvailableRooms > 0";

    // Append the ORDER BY clause based on $sortOrder
    if ($sortOrder === 'price_high_to_low') {
        $sql .= " ORDER BY rt.PricePerNight DESC";
    } elseif ($sortOrder === 'price_low_to_high') {
        $sql .= " ORDER BY rt.PricePerNight ASC";
    }

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



function CarSearch($pickup_location, $pickup_date, $dropoff_date, $sortOrder = '')
{
    $AvailabilityStatus = 'Available';
    $con = getConnection();

    // Start building the SQL query
    $sql = "SELECT * FROM car_info WHERE AvailabilityStatus='{$AvailabilityStatus}' AND Location='{$pickup_location}'";

    // Append the ORDER BY clause based on $sortOrder
    if ($sortOrder === 'price_high_to_low') {
        $sql .= " ORDER BY DailyRate DESC";
    } elseif ($sortOrder === 'price_low_to_high') {
        $sql .= " ORDER BY DailyRate ASC";
    }

    // Execute the query
    $result = mysqli_query($con, $sql);
    $cars = [];

    // Fetch the results
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($cars, $row);
    }

    // Store the search parameters in the session
    $_SESSION['location'] = $pickup_location;
    $_SESSION['pickup'] = $pickup_date;
    $_SESSION['dropoff'] = $dropoff_date;

    return $cars;
}



?>