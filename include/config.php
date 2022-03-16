<?php 
	ob_start();
	session_start();
	date_default_timezone_set("Asia/Dhaka");
	
	// DB connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "psr";

	$conn = new mysqli($servername, $username,$password,$dbname);

	if ($conn->connect_error) {
		die('Connection Error: '.$conn->connect_error);
	}

	// $uname = "admin";
	// $pass = "123456";
	// $sql = "SELECT * FROM users WHERE username = '$uname' && user_password = '$pass' LIMIT 1";
	// $res = $conn->query($sql);

	// if($res->num_rows > 0){
	// 	echo "Login Success";
	// }else{
	// 	echo "Login Faild";
	// }

