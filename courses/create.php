<?php 
    
require_once('../db/database.php');
var_dump($_POST);
$tid = 4;

if(isset($_POST['subname']) && isset($_POST['subtype']) && isset($_POST['cid']))
{
    $subname = $_POST['subname'];
    $subtype = $_POST['subtype'];
    $cid = $_POST['cid'];
    $query = "insert into subject(`subname`,`tid`,`cid`,`subtype`) values('$subname', $tid, $cid, '$subtype')";
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