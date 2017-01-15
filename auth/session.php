<?php
session_start();
if(!isset($_SESSION['tid'])){
    header($_SERVER['SERVER_PROTOCOL'] . ' 403', true, 403);
    header('Location: ../public');
}
?>