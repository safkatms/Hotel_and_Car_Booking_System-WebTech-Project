<?php
session_start();
require_once ("../Model/usermodel.php");

$username = $_REQUEST['username'];

    $status = checkUsernameAvailability($username);

    if ($status) {
        echo 'User not found.';
    } else {
        return true;
    }

?>