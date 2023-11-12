<?php
session_start();
require_once "../Model/usermodel.php";

$firstname = $_REQUEST['Firstname'];
$lastname = $_REQUEST['Lastname'];
$email = $_REQUEST['Email'];
$mobile = $_REQUEST['Mobile'];


if ($firstname=='' ||$lastname==''  ||$email=='' ||$mobile=='') {
    echo 'All Fields must be filled.';
} elseif (!ctype_upper($firstname[0]) || !ctype_alpha($firstname)) {
    echo 'First Name should start with a capital letter and contain only alphabetic characters.';
} elseif (!ctype_upper($lastname[0]) || !ctype_alpha($lastname)) {
    echo 'Last Name should start with a capital letter and contain only alphabetic characters.';
} elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    echo 'Email should include "@" and "." symbols.';
} elseif (strlen($mobile) !== 11 || !ctype_digit($mobile) || !in_array(substr($mobile, 0, 3), ['017', '016', '018', '015', '019', '013'])) {
    echo 'Invalid mobile number. It should be 11 digits long, contain only digits, and start with 017, 016, 018, 015, 019, or 013.';
}  else {
   $status= editUserInfo($firstname, $lastname, $email, $mobile);
   if ($status) {
    header('location:../View/useraccount.php');
   } else {
    echo 'Username or Email Already Taken.';
   }
}
