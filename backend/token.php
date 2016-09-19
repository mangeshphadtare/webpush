<?php

if(isset($_POST['token'])){
$token = $_POST['token'];
include_once('database.php');
$deviceTokenRegistration = new Database();
$deviceTokenRegistration->insertUserDeviceToken($token);
}


?>