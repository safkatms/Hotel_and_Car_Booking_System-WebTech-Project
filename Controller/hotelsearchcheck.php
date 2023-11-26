<?php
require_once "../Model/searchingmodel.php";
if (isset($_POST['city']) && isset($_POST['checkin']) && isset($_POST['checkout']) && isset($_POST['room'])) {
    $city = $_POST['city'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];

    if ($checkin == "") {
        echo "Insert check-in date.";
    } elseif ($checkout == "") {
        echo "Insert check-out date.";
    } elseif ($checkin == $checkout) {
        echo "Insert different check-out date.";
    } else {

        $status = HotelSearch($city,$room,$checkin,$checkout);
        if ($status) {
            $_SESSION['flag'] = "true";
            print_r($status);
            header("location: ../View/hotelbooking.php");
        } else {
            echo "No Matching Result!";
        }
    }
}
?>