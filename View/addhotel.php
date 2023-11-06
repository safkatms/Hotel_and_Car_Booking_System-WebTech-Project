<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Listing</title>
</head>
<body>
<?php include_once('header.php');?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('hotelownermenu.php')?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
        <legend>Listing</legend>
        <form action="../Controller/addhotelcheck.php" method="post" enctype="">
            <h4>What's the name of your hotel?</h4><br>
            <h5>Hotel Name </h5><br>
            <input type="text" name="Hotelname" id=""><br>
            <h5>Street name and house number</h5><br>
            <input type="text" name="Hoteladdress" id=""><br>
            <h5>City</h5><br>
            <select name="City" id="">
                <option value="Dhaka">Dhaka</option>
                <option value="Barisal">Barisal</option>
                <option value="Khulna">Khulna</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Rangpur">Rangpur</option>
            </select><br>
            <h4>What is the star rating of your hotel?</h4><br>
            <input type="radio" name="Rating" value="">N/A<br>
            <input type="radio" name="Rating" value="1">1 star<br>
            <input type="radio" name="Rating" value="2">2 star<br>
            <input type="radio" name="Rating" value="3">3 star<br>
            <input type="radio" name="Rating" value="4">4 star<br>
            <input type="radio" name="Rating" value="5">5 star<br>
            <br><br><br> 
              <input type="submit" value="Submit">
            </div>  
        </form>
    </fieldset>
</body>
</html>