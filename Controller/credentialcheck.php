<?php
session_start();
require_once("../Model/usermodel.php");

    $inputJSON= $_POST['input'];
    $input = json_decode($inputJSON, true);

    if (isset($input['username']) && isset($input['password'])) {
        $username = $input['username'];
        $password = $input['password'];

        $status = verifyUserCredentials($username, $password);

        $response = [];

        if ($status) {
            $response['message'] = "Login successful";
        } else {
            $response['message'] = "Invalid password/Banned user";
        }

        header('Content-Type: application/json');

        echo json_encode($response);
    }

?>
