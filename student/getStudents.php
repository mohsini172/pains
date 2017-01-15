<?php
require_once('../db/database.php');
include('../auth/session.php');
$tid = $_SESSION['tid'];
$query = "SELECT * from courses join class using(cid) join student using(cid) where courses.tid = '$tid';";
$result = $db->fetch($query);
// echo $query;
$response = array();
foreach($result as $row){
    $key = $row['courseid'];
    if(isset($response[$key])){
        array_push($response[$key],$row);
    }
    else{
        $response[$key] = array();
        array_push($response[$key],$row);
    }
}
echo json_encode($response);
?>