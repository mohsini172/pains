<?php 
    

require_once('../db/database.php');
$params = json_decode(file_get_contents('php://input'),true);

if(isset($params['tname']) && isset($params['tcnic']) && isset($params['address']) && isset($params['phone']))
{
    $tname = $params['tname'];
    $tcnic = $params['tcnic'];
    $address = $params['address'];
    $phone = $params['phone'];
    $email = $params['email'];
    $password = $params['password'];
    $password = md5($password);
    $query = "insert into teacher(`tname`, `tcnic`, `address`,`phone`,`email`,`password`) 
                         values('$tname', '$tcnic', '$address', '$phone','$email','$password')";
    if($db->store($query)<=0){
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        die("error in insertion");
    }
}

else
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die("Invalid arguments");
}

?>