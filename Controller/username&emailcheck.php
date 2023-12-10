<?php
session_start();
require_once("../Model/authmodel.php");

$response = [];

if (isset($_POST['email']) && isset($_POST['username'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];

    // Check email availability
    if (checkEmailAvailability($email)) {
        $response['emailAvailability'] = 'Email Not Taken.';
    } else {
        $response['emailAvailability'] = 'Email Already Taken.';
    }

    // Check username availability
    if (checkUsernameAvailability($username)) {
        $response['usernameAvailability'] = 'Username Available.';
    } else {
        $response['usernameAvailability'] = 'Username Already Taken.';
    }
} else {
    $response['error'] = 'Missing email or username';
}

echo json_encode($response);
?>
