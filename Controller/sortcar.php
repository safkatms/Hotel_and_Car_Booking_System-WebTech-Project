<?php
require_once '../Controller/sessioncheck.php';
require_once '../Model/searchingmodel.php';

if (isset($_POST['pickup_location'], $_POST['pickup_date'], $_POST['dropoff_date'],$_POST['sort'])) {
   
    $pickup_location = $_POST['pickup_location'];
    $pickup_date = $_POST['pickup_date'];
    $dropoff_date = $_POST['dropoff_date'];
    $sortOrder = $_POST['sort'];
    
    $cars = CarSearch($pickup_location, $pickup_date, $dropoff_date, $sortOrder);

        echo json_encode($cars);
    } 
?>