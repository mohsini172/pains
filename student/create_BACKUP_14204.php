<<<<<<< HEAD
<?php
    
require_once('../db/database.php');

if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['father_name']) && isset($_POST['cnic']) && isset($_POST['phone']) &&                  isset($_POST['cid']))
{
    $name = $_POST['name'];
    $id = $_POST['id'];
=======
<?php 
    
require_once('../db/database.php');

if(isset($_POST['name']) && isset($_POST['father_name']) && isset($_POST['cnic']) && isset($_POST['phone']) &&                  isset($_POST['cid']))
{
    $name = $_POST['name'];
>>>>>>> 775bfa11186291a8cc7ca1add3647d10223b5aac
    $father_name = $_POST['father_name'];
    $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $cid = $_POST['cid'];
<<<<<<< HEAD
    
    $db->store("insert into student(`sname`, `father_name`, `scnic`, `phone`, `cid`) values('$name', '$father_name', '$cnic'
                '$phone', '$cid')");
=======
    $query = "insert into student(`sname`, `father_name`, `scnic`, `phone`, `cid`) values('$name', '$father_name', '$cnic','$phone', $cid)";
    echo $query;
    if($db->store($query)>0);
    else{
        die("Error in insertion");
    }
>>>>>>> 775bfa11186291a8cc7ca1add3647d10223b5aac
}

else
{
    die("Invalid arguments");
}

?>