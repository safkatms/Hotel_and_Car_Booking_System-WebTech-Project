<?php

require_once('../Controller/sessioncheck.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel Listing</title>
    <script src="../Asset/hotelScript.js"></script>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <legend>Listing</legend>
                <form action="../Controller/addhotelcheck.php" method="post" enctype="" onsubmit=" return validatehotel();">
                    <h4>What's the name of your hotel?</h4><br>
                    <h5>Hotel Name </h5><br>
                    <input type="text" name="Hotelname" id="Hotelname" value=""><br>
                    <h5>Street name and house number</h5><br>
                    <input type="text" name="Hoteladdress" id="Hoteladdress" value=""><br>
                    <h5>City</h5><br>
                    <select name="City" id="City">
                        <option value="" selected>Setect a Location</option>
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
                    <input type="radio" name="Rating" id="N/A" value="0">N/A<br>
                    <input type="radio" name="Rating" id="Rating1" value="1">1 star<br>
                    <input type="radio" name="Rating" id="Rating2" value="2">2 star<br>
                    <input type="radio" name="Rating" id="Rating3" value="3">3 star<br>
                    <input type="radio" name="Rating" id="Rating4" value="4">4 star<br>
                    <input type="radio" name="Rating" id="Rating5" value="5">5 star<br>
                    <br><br><br>
                    <input type="submit" value="Submit"  />
        </div>
        </form>
        </fieldset>
</body>

</html>