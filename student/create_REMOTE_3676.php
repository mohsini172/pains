<?php 
    
require_once('../db/database.php');

if(isset($_POST['name']) && isset($_POST['father_name']) && isset($_POST['cnic']) && isset($_POST['phone']) &&                  isset($_POST['cid']))
{
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $cid = $_POST['cid'];
    $query = "insert into student(`sname`, `father_name`, `scnic`, `phone`, `cid`) values('$name', '$father_name', '$cnic','$phone', $cid)";
    echo $query;
    if($db->store($query)>0);
    else{
        die("Error in insertion");
    }
}

else
{
    die("Invalid arguments");
}

?>