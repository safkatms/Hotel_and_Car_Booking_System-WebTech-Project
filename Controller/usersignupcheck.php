<?php
session_start();
require_once "../Model/authmodel.php";

$firstname = $_REQUEST['Firstname'];
$lastname = $_REQUEST['Lastname'];
$username = $_REQUEST['Username'];
$email = $_REQUEST['Email'];
$mobile = $_REQUEST['Mobile'];
$dob = $_REQUEST['DOB'];
$gender = (isset($_REQUEST['Gender'])) ? $_REQUEST['Gender'] : '';
$password= $_REQUEST['Password'];
$conpassword= $_REQUEST['ConPassword'];
$usertype='user';

if (
    $firstname=='' ||$lastname=='' || $username=='' ||$email=='' ||$password=='' ||$conpassword=='' ||$mobile==''||$dob=='' ||$gender == ''
) {
    echo 'All Fields must be filled.';
} elseif (!ctype_upper($firstname[0]) || !ctype_alpha($firstname)) {
    echo 'First Name should start with a capital letter and contain only alphabetic characters.';
} elseif (!ctype_upper($lastname[0]) || !ctype_alpha($lastname)) {
    echo 'Last Name should start with a capital letter and contain only alphabetic characters.';
} elseif (strlen($username) < 6 || strpbrk($username, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') !== false || strpbrk($username, ' ') !== false) {
    echo 'Username should be at least 6 characters long and contain only lowercase letters, numbers, and underscores.';
} elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    echo 'Email should include "@" and "." symbols.';
} elseif (strlen($mobile) !== 11 || !ctype_digit($mobile) || !in_array(substr($mobile, 0, 3), ['017', '016', '018', '015', '019', '013'])) {
    echo 'Invalid mobile number. It should be 11 digits long, contain only digits, and start with 017, 016, 018, 015, 019, or 013.';
} elseif (strlen($password) < 6 || strpbrk($password, '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') == false || strpbrk($password, '0123456789') == false || strpbrk($password, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') == false || strpbrk($password, 'abcdefghijklmnopqrstuvwxyz') == false) {
    echo 'Password should be at least 6 characters with at least one uppercase letter, one lowercase letter, one special character, and one number.';
} elseif ($password !== $conpassword) {
    echo 'Passwords do not match.';
} else {
   $status= signup($firstname,$lastname,$username,$email,$mobile,$dob,$gender,$password,$usertype);
   if ($status) {
    header('location:../view/signin.php');
   } else {
    echo 'Username or Email Already Taken.';
   }
}
