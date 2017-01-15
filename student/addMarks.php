<?php
include('../auth/session.php');
require_once('../db/database.php');
$params = json_decode(file_get_contents('php://input'),true);
if(isset($params['Students']) && isset($params['total']) && isset($params['type']) && isset($params['courseid']) && isset($params['date'])){
    $courseid = $params['courseid'];
    $students = $params['Students'];
    $total = $params['total'];
    $type = $params['type'];
    $date = $params['date'];
    foreach($students as $key => $student){
        $query = "insert into marks (`courseid`,`sid`,`marks_type`,`total`,`obtained`,`date`) values('$courseid','$key','$type','$total','$student','$date');";
        echo $query;
        if($db->store($query)<=0){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500', true, 500);
            die("Error");
        }

    }
    echo "success";
}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 400', true, 400);
    die(var_dump($params));
}
?>