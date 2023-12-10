<?php 

require_once('db.php');



function gethotelOwnerInfo()
{
    
    $con = getConnection();
    $sql = "SELECT * FROM registeruser
    WHERE usertype = 'Hotel' ";

    $result = mysqli_query($con, $sql);
    $hotelowners = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($hotelowners, $row);
    }

    return $hotelowners;
}

function getcarOwnerInfo()
{
    
    $con = getConnection();
    $sql = "SELECT * FROM registeruser
    WHERE usertype = 'Car' ";
    $result = mysqli_query($con, $sql);
    $carowners = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($carowners, $row);
    }

    return $carowners;
}

function getOwnerInfo($uname)
{
    
    $con = getConnection();
    $sql = "SELECT * FROM registeruser WHERE username = '$uname'";

    $result = mysqli_query($con, $sql);
    $owners = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($owners, $row);
    }

    return $owners;
}


function updateBanStatus($username,$banstatus)
{
    $con = getConnection();

        
        $sql = "UPDATE registeruser SET banstatus = '$banstatus' WHERE username = '$username'";
        
      
   
    $result=mysqli_query($con, $sql);
    if($result)
    {
        return true;
    }else{
        return false;
    }

}





?>