<?php
require_once '../Model/db.php';

function HotelBooking($roomID)
{

    $con = getConnection();
    $sql = "SELECT h.*, rt.* FROM hotel_info h 
            INNER JOIN roomtype rt ON h.HotelID = rt.HotelID
            WHERE rt.RoomTypeID = '{$roomID}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function HotelBookingConfirm($hotelname, $hotelID, $hoteladdress, $roomtype, $roomID, $userfullname, $useremail, $usermobile, $checkin, $checkout, $numberofroom, $bookingstatus, $totalPrice)
{
    $currentUser = $_SESSION["username"];
    $con = getConnection();
    $sql = "INSERT INTO hotelbooking (Username, Fullname, Email, Mobile, HotelName, HotelID, HotelAddress, RoomTypeName, RoomTypeID, CheckInDate, CheckOutDate, NumberOfRooms, TotalPrice, Status) VALUES ('{$currentUser}', '{$userfullname}', '{$useremail}', '{$usermobile}', '{$hotelname}', '{$hotelID}', '{$hoteladdress}', '{$roomtype}', '{$roomID}', '{$checkin}', '{$checkout}', '{$numberofroom}', '{$totalPrice}', '{$bookingstatus}')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
function HotelBookingHistory()
{
    $currentUser = $_SESSION["username"];

    $con = getConnection();
    $sql = "SELECT * FROM hotelbooking WHERE Username = '{$currentUser}'";

    $result = mysqli_query($con, $sql);
    $hotelbookinghistory = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotelbookinghistory, $row);
    }


    return $hotelbookinghistory;
}

function ViewHotelBooking($bookingID)
{

    $con = getConnection();
    $sql = "SELECT * FROM hotelbooking WHERE BookingID='{$bookingID}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function CancelHotelBooking($bookingID)
{

    $con = getConnection();
    $sql = "UPDATE hotelbooking SET Status='Cancelled' WHERE BookingID='{$bookingID}'";

    $result = mysqli_query($con, $sql);
    if($result)
    {
        return true;
    }else{
        return false;
    }
}

function CarBooking($CarID)
{

    $con = getConnection();
    $sql = "SELECT * FROM car_info WHERE CarID='{$CarID}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function CarBookingConfirm($carid, $carOwnername, $brand, $model, $name, $email, $mobile, $startdate, $enddate, $location, $bookingstatus, $totalprice)
{
    $currentUser = $_SESSION["username"];
    $con = getConnection();
    $sql = "INSERT INTO carbooking (Username, Fullname, Email, Mobile, CarID, OwnerUsername, Brand, Model, StartDate, EndDate, Location, TotalPrice, Status) 
    VALUES ('{$currentUser}', '{$name}', '{$email}', '{$mobile}', '{$carid}', '{$carOwnername}', '{$brand}', '{$model}', '{$startdate}', '{$enddate}', '{$location}', '{$totalprice}', '{$bookingstatus}')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function CarBookingHistory()
{
    $currentUser = $_SESSION["username"];

    $con = getConnection();
    $sql = "SELECT * FROM carbooking WHERE Username = '{$currentUser}'";

    $result = mysqli_query($con, $sql);
    $hotelbookinghistory = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotelbookinghistory, $row);
    }


    return $hotelbookinghistory;
}


function ViewCarBooking($bookingID)
{

    $con = getConnection();
    $sql = "SELECT * FROM carbooking WHERE BookingID='{$bookingID}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function CancelCarBooking($bookingID)
{

    $con = getConnection();
    $sql = "UPDATE carbooking SET Status='Cancelled' WHERE BookingID='{$bookingID}'";

    $result = mysqli_query($con, $sql);
    if($result)
    {
        return true;
    }else{
        return false;
    }
}