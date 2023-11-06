
<?php 
    require_once('db.php');

    
    function ownerSignup($firstname, $lastname, $username, $email, $mobile, $dob, $gender, $password, $service)
    {
    
        $con = getConnection();
        $sql = "SELECT * FROM ownersinfo where username='{$username}' or email='{$email}'";
        $sql1 = "SELECT * FROM signin_info where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $result1 = mysqli_query($con, $sql1);
        $count =  mysqli_num_rows($result);
        $count1 = mysqli_num_rows($result1);
    
        if ($count == 1 || $count1 == 1) {
            return false;
        } else {
            $sql2 = "INSERT INTO ownersinfo (firstname,lastname,username,email,mobile,dob,gender,password,service) VALUES('{$firstname}','{$lastname}','{$username}' , '{$email}' ,'{$mobile}','{$dob}','{$gender}','{$password}','{$service}')";
            $sql3 = "INSERT INTO signin_info (username,password,user_type) VALUES('{$username}' , '{$password}', '{$service}')";
            $result2 = mysqli_query($con, $sql2);
            $result3 = mysqli_query($con, $sql3);
            if ($result2 && $result3) {
                return true;
            } else {
                return false;
            }
        }
    }



    function hotelregistration($ownerusername,$hotelname,$hoteladdress,$city,$rating)
    {
        $con = getConnection();

        
        
        $sql = "INSERT INTO hotel_info (HotelID, OwnerUsername, HotelName, Address, City, Rating) VALUES (NULL, '{$ownerusername}', '{$hotelname}', '{$hoteladdress}', '{$city}', '{$rating}')";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            return true;
           

        } else {
            return false;
        }
    }

    function getHotelInfo()
    {
        $currentOwner = $_COOKIE['username'];
        $con = getConnection();
        $sql = "SELECT * FROM hotel_info WHERE OwnerUsername='{$currentOwner}'";
        $result = mysqli_query($con, $sql);
        $hotel = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($hotel, $row);
        }
    
        return $hotel;
    }





       




?>