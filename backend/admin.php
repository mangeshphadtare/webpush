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

include_once('database.php');

$db = new Database();

$token = $db->getRegisteredToken();

echo $token;

?>

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

$(function(){

$("textarea").val("");

});

function isEmptyTextBox(){

var msgLength = $.trim($("textarea").val()).length;

if(msgLength == 0){

alert("Text box must not be empty");

return false;

}else{

return true;

}

}

</script>

<p id="logo"><img src="images/fly.png" alt="logo" /></p>

<h2>Firesbase Cloud Messaging (Php Web Server) </h2>

<p>Firebase Downstream Push Notification</p>

<form method="post" action="servertofirebase.php" onsubmit="return isEmptyTextBox()">

<input type="hidden" id="user_id" name="token" value="<?php echo $token ? $token : 0 ?>">

<textarea cols="70" rows="12" name="message" cols="45" placeholder="Message via Firebase Cloud Messaging"></textarea> <br/>

<input id="button-send" type="submit" value="Send Firebase Push Notification" />

</form>

</div>

</body>

</html>