<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Participants Data</title>
	<link rel="stylesheet" type="text/css" href="output.css">
</head>
<body>
	<button id="logout"><a href="admin/index.php">back</a></button>
	<h2 id="heading">DATA OF REGISTERED CANDIDATES &#8595;</h2>
	<table id="customers">
		<tr>
			<th>Timestamp</th>
			<th>Roll no.</th>
			<th>Fullname</th>
			<th>password</th>
			<th>Phone No.</th>
			<th>Email</th>
			<!-- <th>Password</th> -->
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","leader_factory");
		if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT timestamp, id, fullname, password, phonenumber, email from users";
		$result = $conn-> query($sql);

		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["timestamp"]."</td><td>".$row["id"]."</td><td>".$row["fullname"]."</td><td>".$row["password"]."</td><td>".$row["phonenumber"]."</td><td>".$row["email"]."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 results";
		}

		$conn-> close();
		?>
	</table>

</body>
</html>