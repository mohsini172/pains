<?php 
    
require_once('../db/database.php');
var_dump($_POST);

if(isset($_POST['sname']) && isset($_POST['father_name']) && isset($_POST['scnic']) && isset($_POST['phone']) && isset($_POST['cid']))
{
    $sname = $_POST['sname'];
    $father_name = $_POST['father_name'];
    $scnic = $_POST['scnic'];
    $phone = $_POST['phone'];
    $cid = $_POST['cid'];
    $query = "insert into student(`sname`, `father_name`, `scnic`, `phone`, `cid`) values('$sname', '$father_name', '$scnic','$phone', $cid)";
    echo $query;
    if($db->store($query)>0);
    else
    {
        die("Error in insertion");
    }
}

else
{
    die("Invalid arguments");
}

?>