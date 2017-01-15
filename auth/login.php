<?php
session_start();
require_once('../db/database.php');
$params = json_decode(file_get_contents('php://input'),true);
if(isset($params['email']) && ($params['password'])){
    $email = $params['email'];
    $password = $params['password'];
    $password = md5($password);
    $query  = "select password,tid from teacher where email = '$email'";
    $result = $db->fetch($query);
    if($result){
        $pwd = $result[0]['password'];
        if($pwd==$password){
            $_SESSION['tid'] = $result[0]['tid'];
            header('Location: ../teacher');
        }
        else{
            header($_SERVER['SERVER_PROTOCOL'] . ' 403', true, 403);
            die("Invalid username or password");
        }
    }
    else{
        header($_SERVER['SERVER_PROTOCOL'] . ' 403', true, 403);
        die("Invalid username or password");
    }
}
else{
header($_SERVER['SERVER_PROTOCOL'] . ' 400', true, 400);
die("Invalid username or password");
}
?>