<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');

$hotel_info = getHotelInfo();
$room_info = getroomInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotels</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('menu.php') ?>
        </div>
        <div style="width: 40%;display: flex;height: auto;">
                <fieldset>


                    <table>

                        <tr>
                            <td>
                                Hotel Name:
                            </td>
                            <td>
                                <?php if (empty($hotel_info)) {
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
                                }
                                ; ?>
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
                                }
                                ; ?>
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
                                }
                                ; ?>
                            </td>
                        </tr>



                    </table>
                    <?php
                    if (empty($hotel_info)) {
                        ?>
                        <a href="addhotel.php">[+]Add Hotel</a>
                    <?php } ?>

                    <?php

                    if (!empty($hotel_info)) {
                        ?>
                        <a href="edithotel.php">Edit Hotel</a>
                    <?php }
                    ?>






                </fieldset>
        

        </div>





    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>