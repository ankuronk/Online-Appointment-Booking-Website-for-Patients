<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patiets</title>

	<style>
		.table {
			background-color: blueviolet;
			color: white;
			font-size: 1.2rem;
		}
			
		.body {
		    background: url(bg1.png);
		}
	</style>
</head>
<body class="body">
	<table>
		<tr class="table">
			<th>Id</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Number</th>
			<th>Address</th>
			<th>Date & Time</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "id19147132_oorder766", "2lKhyQ8<X]j^p)8j", "id19147132_patients");
		$sql = "SELECT * FROM regform ORDER BY id DESC";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["gender"] . "</td><td>". $row["email"] . "</td><td>". $row["phnumber"]. "</td><td>". $row["address"]. "</td><td>". $row["date"] . "</td></tr>";
			}
		}
		else {
			echo "No Result";
		}

		$conn->close();
		?>
	</table>

</body>
</html>