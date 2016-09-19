<?php

include_once('sendnotification.php');

if(isset($_POST['token']) && isset($_POST['message'])){
	
	$token = $_POST['token'];
	$message = array("FCM" => $_POST['message']);
	
	$serverObject = new SendNotification();	
	$jsonString = $serverObject->sendPushNotificationToGCMSever($token, $message);

	$jsonObject = json_decode($jsonString);
	}
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Section Login</title>

<link href="style.css" rel="stylesheet">

</head>

<body>

<div id="form-wrapper">

<?php

if(isset($jsonObject->success) && $jsonObject->success == 1){ ?>

<h2 class="send-success"> Firebase Push Notification successfully sent</h2>

<?php } else{ ?>

<h2 class="send-success"> Invalid Registration. Make sure your have provided the correct details</h2>

<?php } ?>

<h3 class="back-link"><a href="admin.php"> Go back the Admin dashboard</a></h3>

</div>

</body>

</html>
