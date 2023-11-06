<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/usermodel.php');
require_once('../Model/hotelownermodel.php');

$hotel_info = getHotelInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('hotelownermenu.php') ?>
        </div>
        <div style="width: 80%;display: flex;height: auto;">
            <form action="../Controller/addhotelcheck.php" method="post" enctype="">
                <fieldset>


                    <table>
                        
                        <tr>
                            <td>
                                Hotel Name:
                            </td>
                            <td>
                                <?php  if (empty($hotel_info)) {
                                    echo 'Add Information';
                                } else {
                                    echo $hotel_info[0]['HotelName'];
                                } ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hotel Address:
                            </td>
                            <td>
                                <?php if (empty($hotel_info)) {
                                    echo 'Add Information';
                                } else {
                                    echo $hotel_info[0]['Address'];
                                }; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                City:
                            </td>
                            <td>
                            <?php if (empty($hotel_info)) {
                                    echo 'Add Information';
                                } else {
                                    echo $hotel_info[0]['City'];
                                }; ?>
                            </td>
                        </tr>
                        

                        <tr>
                            <td>
                                Rating:
                            </td>
                            <td>
                            <?php if (empty($hotel_info)) {
                                    echo 'Add Information';
                                } else {
                                    echo $hotel_info[0]['Rating'];
                                }; ?>
                            </td>
                        </tr>



                    </table>
                    <?php 
                     if (empty($hotel_info)) {
                    ?>
                    <a href="addhotel.php">[+]Add Hotel</a>
                    <?php }?>
                    <a href="edithotel.php">Edit Hotel</a>
                    <a href="addroom.php">[+]Add Rooms</a>

                </fieldset>
            </form>

        </div>
        </div>

    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>