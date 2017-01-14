<?php 
    
require_once('../db/database.php');
var_dump($_POST);
$tid = 1;

if(isset($_POST['coursename']) && isset($_POST['coursetype']) && isset($_POST['cid']))
{
    $coursename = $_POST['coursename'];
    $coursetype = $_POST['coursetype'];
    $cid = $_POST['cid'];
    $query = "insert into courses(`coursename`,`tid`,`cid`,`coursetype`) values('$coursename', $tid, $cid, '$coursetype')";
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