<?php 
    
require_once('../db/database.php');
var_dump($_POST);

if(isset($_POST['tname']) && isset($_POST['tcnic']) && isset($_POST['address']) && isset($_POST['phone']))
{
    $tname = $_POST['tname'];
    $tcnic = $_POST['tcnic'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $query = "insert into teacher(`tname`, `tcnic`, `address`,`phone`) values('$tname', '$tcnic', '$address', '$phone')";
    if($db->store($query) > 0);
    else
    {
        die("Error in insertion.");
    }
}

else
{
    die("Invalid arguments");
}

?>