<?php
require_once('../Model/adminmodel.php');

$input = $_POST['data'];
$inputData = json_decode($input, true);

if(isset($inputData['username']) && isset($inputData['banstatus'])){
    $username = $inputData['username'];
    $banstatus = $inputData['banstatus'];

    $status = updateBanStatus($username, $banstatus);

    if($status) {
        echo json_encode(["message" => "Operation has done successfully."]);
    } else {
        echo json_encode(["message" => "Failed to update status."]);
    }
} else {
    echo json_encode(["message" => "Invalid request."]);
}
?>

