<?php 
include('../auth/session.php');
require_once('../db/database.php');
$date = date("Y-m-d");
$query = "select sname,marks_type,phone,obtained,total,present,date from marks join student using(sid) join attendance using(sid) where date like '%$date%';";

$result = $db->fetch($query);
var_dump($result);
// echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));

              
/// bulksms.com.pk Text API URL


$username ="923365971717" ;
$password ="2475" ;
$sender = "PAINS" ;




// foreach($result as $row){
// ///Curl start 
//     $mobile = $row['phone'];
//     $name  = $row['sname'];
//     $present = "Absent";
//     $type = $row['marks_type'];
//     $total = $row['total'];
//     $obtained = $row['obtained'];
//     if($row['present']==1){
//         $present = "Present";
//     }
//     // $message = "Report: Name: $name, Attendence: $present, type: $type, total: $total, obtained: $obtained";
//     $message = "Test";
//     $url = "http://bulksms.com.pk/api/sms.php?username=".$username."&password=".$password."&sender=".$sender."&mobile=".urlencode($mobile)."&message=".urlencode($message)." ";
//     echo $url;
//     $ch = curl_init();
//     $timeout = 30;
//     curl_setopt ($ch, 
//     CURLOPT_URL, $url);; 
//     curl_setopt ($ch, 
//     CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt ($ch, 
//     CURLOPT_CONNECTTIMEOUT, $timeout);
//     $response = curl_exec($ch);
//     curl_close($ch); 
//     ///Write out the response
//     echo $response;
     
// }
foreach($result as $row){
    $username = "923365971717";
    $password = "2475";
    $mobile = $row['phone'];
    $sender = "SenderID";
    $name  = $row['sname'];
    $present = "Absent";
    $type = $row['marks_type'];
    $total = $row['total'];
    $obtained = $row['obtained'];
    if($row['present']==1){
        $present = "Present";
    }
    $message = "attendence $present, type $type, total $total, obtained $obtained";

    $url = "http://sendpk.com/api/sms.php?username=".$username."&password=".$password."&mobile=".$mobile."&sender=".urlencode($sender)."&message=".urlencode($message)."";
    $ch = curl_init();
    $timeout = 30;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $responce = curl_exec($ch);
    curl_close($ch);
    /*Print Responce*/
    echo $responce;
}

?>
