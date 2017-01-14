<?php 
    
require_once('../db/database.php');
var_dump($_POST);
$tid = 1;

if(isset($_POST['cname']) && isset($_POST['croom']) && isset($_POST['csection']) && isset($_POST['clevel']))
{
    $cname = $_POST['cname'];
    $croom = $_POST['croom'];
    $csection = $_POST['csection'];
    $clevel = $_POST['clevel'];
    $query = "insert into class(`cname`,`tid`,`csection`,`croom`,`clevel`) values('$cname', $tid, '$csection', '$croom', '$clevel')";
    echo $query;
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