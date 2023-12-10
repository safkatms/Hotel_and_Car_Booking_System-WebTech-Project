<?php
session_start();
require_once ("../Model/authmodel.php");

$username = $_REQUEST['username'];

    $status = checkUsernameAvailability($username);

    if ($status) {
        echo 'User not found.';
    } else {
        return true;
    }

?>