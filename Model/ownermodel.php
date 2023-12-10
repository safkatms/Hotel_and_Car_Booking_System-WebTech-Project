<?php 
    require_once('db.php');
 
    function signinHotelOwner($username, $password)
{
    $usertype = "hotel";
    $con = getConnection();
    $sql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='{$usertype}'";
    $sql1 = "SELECT * FROM ownersinfo WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result1);

        if ($userData) {
            
            $userFirstName = $userData['firstname'];
            $username = $userData['username'];
            setcookie('firstname', $userFirstName, time() + 3600, '/');
            setcookie('username', $username, time() + 3600, '/');
        }
        return true;
    } else {
        return false;
    }
}


function ownerEmailAvailability($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM ownersinfo where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}
?>