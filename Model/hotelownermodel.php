
<?php

require_once('db.php');

function hotelregistration($ownerusername, $hotelname, $hoteladdress, $city, $rating)
{
    $con = getConnection();



    $sql = "INSERT INTO hotel_info ( OwnerUsername, HotelName, Address, City, Rating) VALUES ('{$ownerusername}', '{$hotelname}', '{$hoteladdress}', '{$city}', '{$rating}')";
    $result = mysqli_query($con, $sql);


    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getHotelInfo()
{
    $currentOwner = $_SESSION['username'];

    $con = getConnection();
    $sql = "SELECT * FROM hotel_info WHERE OwnerUsername='{$currentOwner}'";
    $result = mysqli_query($con, $sql);
    $hotel = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotel, $row);
        $hotelid = $row['HotelID'];
        $_SESSION['HotelID'] = $hotelid;
    }

    return $hotel;
}

function editHotelInfo($hotelid, $ownerusername, $hotelname, $hoteladdress, $city, $rating)
{
    $con = getConnection();
    $sql = "UPDATE hotel_info SET HotelName='{$hotelname}', Address='{$hoteladdress}',City='{$city}',Rating='{$rating}' WHERE OwnerUsername='{$ownerusername}'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        $_SESSION['HotelID'] = $hotelid;
        return true;
    } else {
        return false;
    }
}



function addrooms($hotelid, $room, $pricepernight, $totalrooms, $availablerooms)
{
    $hotelid = $_SESSION['HotelID'];

    $con = getConnection();
    $sql = "INSERT INTO roomtype (RoomTypeID, HotelID, TypeName, PricePerNight, TotalRooms, AvailableRooms) VALUES (NULL, '{$hotelid}', '{$room}', '{$pricepernight}', '{$totalrooms}', '{$availablerooms}')    ";
    $result = mysqli_query($con, $sql);

    if ($result) {

        return true;
    } else {
        return false;
    }
}
function getroomInfo()
{
    if (isset($_SESSION['HotelID'])) {
        $hotelid = $_SESSION['HotelID'];

        $con = getConnection();
        $sql = "SELECT * FROM roomtype WHERE HotelID ='{$hotelid}'";
        $result = mysqli_query($con, $sql);
        $room = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($room, $row);
        }

        return $room;
    }
}

function getRoom($roomid)
{
    $con = getConnection();
    $sql = "SELECT * FROM roomtype WHERE RoomTypeID = '{$roomid}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Error";
        return false;
    }
}



function editRoomInfo($id, $room, $PricePerNight, $TotalRooms, $AvailableRooms)
{
    $con = getConnection();
    $sql = "UPDATE roomtype SET TypeName='{$room}', PricePerNight='{$PricePerNight}',TotalRooms='{$TotalRooms}',AvailableRooms='{$AvailableRooms}' WHERE RoomTypeID='{$id}'";
    $result = mysqli_query($con, $sql);


    if ($result) {

        return true;
    } else {
        return false;
    }
}

function pendingBookings()
{
    if (isset($_SESSION['HotelID'])) {
        $hotelid = $_SESSION['HotelID'];

        $con = getConnection();
        $sql = "SELECT * FROM hotelbooking WHERE HotelID ='{$hotelid}' AND Status ='Pending'";
        $result = mysqli_query($con, $sql);
        $pendingbookings = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($pendingbookings, $row);
        }

        return $pendingbookings;
    }
}
function confirmedBookings()
{
    if (isset($_SESSION['HotelID'])) {
        $hotelid = $_SESSION['HotelID'];

        $con = getConnection();
        $sql = "SELECT * FROM hotelbooking WHERE HotelID ='{$hotelid}' AND Status ='Confirmed'";

        $result = mysqli_query($con, $sql);
        $confirmedbookings = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($confirmedbookings, $row);
        }

        return $confirmedbookings;
    }
}

function cancelledBookings()
{
    if (isset($_SESSION['HotelID'])) {
        $hotelid = $_SESSION['HotelID'];

        $con = getConnection();
        $sql = "SELECT * FROM hotelbooking WHERE HotelID ='{$hotelid}' AND Status ='Cancelled'";
        $result = mysqli_query($con, $sql);
        $cancelledbookings = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($cancelledbookings, $row);
        }

        return $cancelledbookings;
    }
}

function editBookingStatus($id, $status, $rid, $nroom)
{
    $con = getConnection();
    $sql = "UPDATE hotelbooking SET Status='{$status}' WHERE BookingID='{$id}'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        if ($status == 'Confirmed') {
            $sql1 = "UPDATE roomtype SET AvailableRooms=AvailableRooms-'$nroom' WHERE RoomTypeID='{$rid}'";
            $result1 = mysqli_query($con, $sql1);
            if ($result1) {
                return true;
            }
        }else if($status == 'Cancelled')
        {
            return true;
        }else{
            return false;
        }
    } else {
        return false;
    }
}

function viewBookingInfo($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM hotelbooking WHERE BookingID = '{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Error";
        return false;
    }
}
?>