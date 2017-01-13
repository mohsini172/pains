<?php 
    
require_once('../db/database.php');
var_dump($_POST);

if(isset($_POST['tname']) && isset($_POST['tcnic']) && isset($_POST['department']))
{
    $tname = $_POST['tname'];
    $tcnic = $_POST['tcnic'];
    $department = $_POST['department'];
    $query = "insert into teacher(`tname`, `tcnic`, `department`) values('$tname', '$tcnic', '$department')";
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