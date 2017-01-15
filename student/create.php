<?php 
    
require_once('../db/database.php');
include('../auth/session.php');
$params = json_decode(file_get_contents('php://input'),true);

$tid = $_SESSION['tid'];

if(isset($params['sname']) && isset($params['father_name']) && isset($params['rollnum']) && isset($params['phone']) && isset($params['cid']))
{
    $sname = $params['sname'];
    $father_name = $params['father_name'];
    $rollnum = $params['rollnum'];
    $phone = $params['phone'];
    $cid = $params['cid'];
    $query = "insert into student(`sname`, `father_name`, `rollnum`, `phone`, `cid`) values('$sname', '$father_name', '$rollnum','$phone', $cid)";
    echo $query;
    if($db->store($query)>0);
    else
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500', true, 500);
        die("Error in insertion");
    }
}

else
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 400', true, 400);
    die("Invalid arguments");
}

?>