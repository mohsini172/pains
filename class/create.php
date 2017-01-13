<?php 
    
require_once('../db/database.php');
var_dump($_POST);

if(isset($_POST['cname']))
{
    $cname = $_POST['cname'];
    $query = "insert into class(`cname`) values('$cname')";
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