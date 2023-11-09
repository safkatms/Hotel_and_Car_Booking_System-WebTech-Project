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
    if($count == 1)
    {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }else{
        return false;
    }
}




?>