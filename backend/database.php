<?php
include_once('db.php');

 class Database{
	
	public function __construct(){
	}
	
	public function insertUserDeviceToken($token){			
		$com = new DbConnect();	
		$sql = "insert into firebase(token) values ('$token')";
		$success = mysqli_query($com->getDb(), $sql);
		if($success){
			echo json_encode(array('token' => 1), JSON_PRETTY_PRINT);
		}else{
			echo json_encode(array('token' => 0), JSON_PRETTY_PRINT);
		}	
	}
	
	public function getRegisteredToken(){
		
		$com = new DbConnect();
		$sql = "select * from firebase order by id desc limit 1";
		$result = mysqli_query($com->getDb(), $sql);
		$row = mysqli_fetch_row($result);
		$token = $row[1];
		return $token;
	}	
}

?>

