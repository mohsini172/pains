<?php
include('../auth/session.php');
require_once('../db/database.php');
$tid = $_SESSION['tid'];
// $query = "select * from class where tid = '$tid'";
$query = "select * from class";
$result = $db->fetch($query);
echo json_encode($result);

?>