<?php

require_once('../Controller/sessioncheck.php');
require_once('../Model/hotelownermodel.php');

$hotel_info = getHotelInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Hotel</title>
    <script src="../Asset/hotelScript.js"></script>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;justify-content: center;">
        <div style="width: 350px;display: flex;height: auto;">
            <fieldset style="width: 100%;">
                <form action="../Controller/hoteleditcheck.php" method="post" enctype="">
                    <table>



                        <tr>
                            <td>
                                Hotel Name:
                            </td>
                            <td>
                                <input type="text" name="Hotelname" id="Hotelname" value="<?php echo $hotel_info[0]['HotelName']; ?>">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hotel Address:
                            </td>
                            <td>
                                <input type="text" name="Hoteladdress" id="Hoteladdress" value="<?php echo $hotel_info[0]['Address']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                City:
                            </td>
                            <td>
                                <select name="City" id="City">

                                    <option value="Dhaka" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Dhaka")
                                                                echo " selected"; ?>>Dhaka</option>
                                    <option value="Chittagong" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Chittagong")
                                                                    echo " selected"; ?>>Chittagong</option>
                                    <option value="Sylhet" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Sylhet")
                                                                echo " selected"; ?>>Sylhet</option>
                                    <option value="Barisal" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Barisal")
                                                                echo " selected"; ?>>Barisal</option>
                                    <option value="Khulna" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Khulna")
                                                                echo " selected"; ?>>Khulna</option>
                                    <option value="Mymensingh" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Mymensingh")
                                                                    echo " selected"; ?>>Mymensingh</option>
                                    <option value="Rajshahi" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Rajshahi")
                                                                    echo " selected"; ?>>Rajshahi</option>
                                    <option value="Rangpur" <?php if (isset($hotel_info[0]['City']) && $hotel_info[0]['City'] == "Rangpur")
                                                                echo " selected"; ?>>Rangpur</option>

                                </select>


                            </td>
                        </tr>


                        <tr>
                            <td>
                                Rating:
                            </td>
                            <td>
                               
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                            <input type="radio" name="Rating" id="N/A" value="0">N/A<br>
                                <input type="radio" name="Rating" id="Rating1" value="1" <?php if (isset($hotel_info[0]['Rating']) && $hotel_info[0]['Rating'] == "1")
                                                                echo " checked"; ?>>1 star<br>
                                <input type="radio" name="Rating" id="Rating2" value="2"<?php if (isset($hotel_info[0]['Rating']) && $hotel_info[0]['Rating'] == "2")
                                                                echo " checked"; ?>>2 star<br>
                                <input type="radio" name="Rating" id="Rating3" value="3"<?php if (isset($hotel_info[0]['Rating']) && $hotel_info[0]['Rating'] == "3")
                                                                echo " checked"; ?>>3 star<br>
                                <input type="radio" name="Rating" id="Rating4" value="4"<?php if (isset($hotel_info[0]['Rating']) && $hotel_info[0]['Rating'] == "4")
                                                                echo " checked"; ?>>4 star<br>
                                <input type="radio" name="Rating" id="Rating5" value="5"<?php if (isset($hotel_info[0]['Rating']) && $hotel_info[0]['Rating'] == "5")
                                                                echo " checked"; ?>>5 star<br>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" value="Save" onclick=" return validatehotel();">
                            </td>





                    </table>
                </form>


            </fieldset>

        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>