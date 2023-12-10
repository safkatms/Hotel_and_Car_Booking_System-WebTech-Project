<?php

require_once('../Model/adminmodel.php');

if(isset($_REQUEST['username']) && isset($_REQUEST['banstatus'])){
    $username = $_REQUEST['username'];
    $banstatus = $_REQUEST['banstatus'];

    $status = updateBanStatus($username,$banstatus);
    if($status)
    {
        header('Location:../View/manageowner.php'); 
        return true;   
    }else{
        echo "Status remain same.";
    }
}

    
?>