<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//connection
	$conn = new mysqli('localhost','id19147132_root','OSX0THq_^U?@1#^R','id19147132_usersignup');
	if ($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into usersignup(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $email, $password);
		$stmt->execute();
		header("Location:index.html");
		$stmt->close();
		$conn->close();
	}
	
?>