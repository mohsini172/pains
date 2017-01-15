<?php 
include('../auth/session.php');    
require_once('../db/database.php');

$params = json_decode(file_get_contents('php://input'),true);
$tid = $_SESSION['tid'];

if(isset($params['cname']) && isset($params['croom']) && isset($params['csection']) && isset($params['clevel']))
{
    $cname = $params['cname'];
    $croom = $params['croom'];
    $csection = $params['csection'];
    $clevel = $params['clevel'];
    $query = "insert into class(`cname`,`tid`,`csection`,`croom`,`clevel`) values('$cname', $tid, '$csection', '$croom', '$clevel')";
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