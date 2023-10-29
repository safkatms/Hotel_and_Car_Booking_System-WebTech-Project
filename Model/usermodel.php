<?php
require_once('db.php');

function signup($firstname, $lastname, $username, $email, $mobile, $dob, $gender, $password, $usertype)
{

    $con = getConnection();
    $sql = "SELECT * FROM usersinfo where username='{$username}' or email='{$email}'";
    $sql1 = "SELECT * FROM signin_info where username='{$username}'";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $count =  mysqli_num_rows($result);
    $count1 =mysqli_num_rows($result1);

    if ($count == 1||$count1==1) {
        return false;
    } else {
        $sql2 = "INSERT INTO usersinfo (firstname,lastname,username,email,mobile,dob,gender,password) VALUES('{$firstname}','{$lastname}','{$username}' , '{$email}' ,'{$mobile}','{$dob}','{$gender}','{$password}')";
        $sql3 = "INSERT INTO signin_info (username,password,user_type) VALUES('{$username}' , '{$password}', '{$usertype}')";
        $result2 = mysqli_query($con, $sql2);
        $result3 = mysqli_query($con, $sql3);
        if ($result2 && $result3) {
            return true;
        } else {
            return false;
        }
    }

}


function signinUser($username, $password)
{
    $usertype = "user";
    $con = getConnection();
    $sql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='{$usertype}'";
    $sql1 = "SELECT * FROM usersinfo WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result1);

        if ($userData) {
            // Store only the user's first name in a cookie
            $userFirstName = $userData['firstname'];
            $username = $userData['username'];
            setcookie('firstname', $userFirstName, time() + 3600, '/');
            setcookie('username', $username, time() + 3600,'/') ;
        }
        return true;
    } else {
        return false;
    }
}

function signinCar($username, $password)
{
    $usertype = "car";
    $con = getConnection();
    $sql = "SELECT * FROM signin_info WHERE username='{$username}' AND password='{$password}' AND user_type='{$usertype}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function getUserInfo()
{
    $currentUser = $_COOKIE['username'];
    $con = getConnection();
    $sql = "SELECT * FROM usersinfo WHERE username='{$currentUser}' ";
    $result = mysqli_query($con, $sql);
    $users = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;
}

function editUserInfo($firstname, $lastname, $username, $email, $mobile)
{
    $currentUser = $_COOKIE["username"];
    $con = getConnection();
    $sql = "UPDATE usersinfo SET firstname='{$firstname}', lastname='{$lastname}',username='{$username}',email='{$email}',mobile='{$mobile}' WHERE username='{$currentUser}'";
    $result = mysqli_query($con, $sql);
    if($result){
        return true;
    }
    else {
        return false;
    }
}

?>
