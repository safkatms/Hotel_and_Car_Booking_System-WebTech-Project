<?php 
require_once('db.php');
function signup($firstname, $lastname, $username, $email, $mobile, $dob, $gender, $password, $usertype)
{

    $con = getConnection();
    $sql = "SELECT * FROM registeruser where username='{$username}' or email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count =  mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        $sql2 = "INSERT INTO registeruser (firstname,lastname,username,email,mobile,dob,gender,password) VALUES('{$firstname}','{$lastname}','{$username}' , '{$email}' ,'{$mobile}','{$dob}','{$gender}','{$password}')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            return true;
        } else {
            return false;
        }
    }
}


function ownerSignup($firstname, $lastname, $username, $email, $mobile, $dob, $gender, $password, $service)
{

    $con = getConnection();
    $sql = "SELECT * FROM registeruser where username='{$username}' or email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count =  mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        $sql2 = "INSERT INTO registeruser (firstname,lastname,username,email,mobile,dob,gender,password,usertype) VALUES('{$firstname}','{$lastname}','{$username}' , '{$email}' ,'{$mobile}','{$dob}','{$gender}','{$password}','{$service}')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            return true;
        } else {
            return false;
        }
    }
}


function checkEmailAvailability($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM registeruser where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}

function checkUsernameAvailability($username)
{
    $con = getConnection();
    $sql = "SELECT * FROM registeruser where username='{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}



function signinUser($username, $password)
{
    $con = getConnection();
    $sql = "SELECT * FROM registeruser WHERE username='{$username}' AND password='{$password}' AND banstatus=0";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result);

        if ($userData) {
            $userFirstName = $userData['firstname'];
            $userLastName = $userData['lastname'];
            $username = $userData['username'];
            $userEmail = $userData['email'];
            $userMobile = $userData['mobile'];
            $userType = $userData['usertype'];

            //setcookie('firstname', $userFirstName, time() + 3600, '/');
            //setcookie('username', $username, time() + 3600, '/');

            $_SESSION['firstname']=$userFirstName;
            $_SESSION['lastname']=$userLastName;
            $_SESSION['username']=$username;
            $_SESSION['mobile']=$userMobile;
            $_SESSION['email']=$userEmail;
            $_SESSION['usertype']=$userType;
        }
        if($_SESSION['usertype']=='User'){
            header("location: ../view/userhome.php");
        }else if($_SESSION['usertype']=='Hotel'){
            header("location: ../view/hotelownerhome.php");
        }else if($_SESSION['usertype']=='Admin'){
            header("location: ../view/adminhome.php");
        }
        return true;
    } else {
        return false;
    }
}

function verifyUserCredentials($username, $password)
{
    $con = getConnection();
    $sql = "SELECT * FROM registeruser WHERE username='{$username}'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $userData = mysqli_fetch_assoc($result);
        if ($userData) {
            // Directly comparing the plain text password - not recommended for security reasons
            if ($password === $userData['password'] && $userData['banstatus']==0) {
                return true; // Password is correct
            }
        }
    }
    return false; // Username not found or password is incorrect
}
function getUserInfo()
{
    $currentUser = $_SESSION["username"];
    $con = getConnection();
    $sql = "SELECT * FROM registeruser WHERE username='{$currentUser}' ";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function editUserInfo($firstname, $lastname, $email, $mobile)
{
    $currentUser = $_SESSION["username"];
    $con = getConnection();
    $sql = "UPDATE registeruser SET firstname='{$firstname}', lastname='{$lastname}',email='{$email}',mobile='{$mobile}' WHERE username='{$currentUser}'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $_SESSION['firstname']=$firstname;
        return true;
    } else {
        return false;
    }
}


function changeUserPassword($currentpassword, $password)
{
    $currentUser = $_SESSION["username"];
    $con = getConnection();
    $sql = "SELECT * FROM registeruser WHERE username='{$currentUser}' AND password='{$currentpassword}' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count==1) {
        $sql1 = "UPDATE registeruser SET password='{$password}' WHERE username='{$currentUser}'";
        $result1 = mysqli_query($con, $sql1);
            if ($result1) {

                return true;
            } 
        return true;
    } else {
        return false;
    }
}

?>