<?php
include('../auth/session.php');
require_once('../db/database.php');
$params = json_decode(file_get_contents('php://input'),true);
if(isset($params['Students']) && isset($params['date'])){
    $students = $params['Students'];
    $date = $params['date'];
    foreach($students as $key => $student){
        $query = "insert into attendance (`day`,`present`,`sid`) values('$date','$student','$key');";
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
    die("Error");
}
?>