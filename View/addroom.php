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
        <legend>Add Rooms</legend>
        <form action="" method="" enctype="">
            <h4>ADD ROOMS</h4> 
            <h5>TypeName</h5>
            <input type="text" name="Roomname" id="">

            <h5>Price Per Night</h5>
            <input type="text" name="Pricepernight" id="">
                
            </select>
            <h4>Available Rooms</h4>
            <input type="number" name="Availableroom"id="" min="1" >
            <br><br><br> 
              <input type="submit" value="Submit">
            </div>  
        </form>
    </fieldset>
</body>
</html>