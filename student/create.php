<?php
    
require_once('../db/database.php');

if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['father_name']) && isset($_POST['cnic']) && isset($_POST['phone']) &&                  isset($_POST['cid']))
{
    $name = $_POST['name'];
    $id = $_POST['id'];
    $father_name = $_POST['father_name'];
    $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $cid = $_POST['cid'];
    
    $db->store("insert into student(`sname`, `father_name`, `scnic`, `phone`, `cid`) values('$name', '$father_name', '$cnic'
                '$phone', '$cid')");
}

else
{
    die("Invalid arguments");
}

?>