<html>
    <head>
        <title>thank you</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .body{
        display: grid;
        place-items: center;
        background: url(bg1.png);
        font-size: 40px;
        font-style: bold;
        }
        </style>
    </head>
    
    <body class="body">
        <?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phnumber = $_POST['phnumber'];
	$address = $_POST['address'];

	//connection
	$conn = new mysqli('localhost','id19147132_oorder766','2lKhyQ8<X]j^p)8j','id19147132_patients');
	if ($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into regform(name, gender, email, phnumber, address) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $name, $gender, $email, $phnumber, $address);
		$stmt->execute();
		echo "Submitted Succesfully...";
		echo "We will contact you for the confirmation.";
		$stmt->close();
		$conn->close();
	}

?>

<a href="userhome.html">
          <button class="btn btn-primary">Back Home</button>
        </a>
    </body>
</html>
