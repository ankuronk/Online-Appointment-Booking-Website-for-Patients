<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	//connection
	$conn = new mysqli('localhost','id19147132_oorder766','2lKhyQ8<X]j^p)8j','id19147132_patients');
	if ($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into docsignup(name, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
		$stmt->execute();
		echo "Done...";
		$stmt->close();
		$conn->close();
	}

?>