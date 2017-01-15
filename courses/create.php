<?php 
include('../auth/session.php');    
require_once('../db/database.php');

$tid = $_SESSION['tid'];
$params = json_decode(file_get_contents('php://input'),true);
if(isset($params['coursename']) && isset($params['coursetype']) && isset($params['cid']))
{
    $coursename = $params['coursename'];
    $coursetype = $params['coursetype'];
    $cid = $params['cid'];
    $query = "insert into courses(`coursename`,`tid`,`cid`,`coursetype`) values('$coursename', $tid, $cid, '$coursetype')";
    echo $query;
    if($db->store($query) > 0);
    else
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500', true, 500);
        die("Error in insertion.");
    }
}

else
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 400', true, 400);
    die("Invalid arguments");
}

?>