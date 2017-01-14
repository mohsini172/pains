<?php 
    
require_once('../db/database.php');
var_dump($_POST);

if(isset($_POST['subname']))
{
    $subname = $_POST['subname'];
    $query = "insert into subject(`subname`) values('$subname')";
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