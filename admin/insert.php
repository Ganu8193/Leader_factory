<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => leader_factory

		$conn = mysqli_connect("localhost", "root", "", "leader_factory");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		$meet_link = $_REQUEST['meet_link'];
		
		$sql = "INSERT INTO meet_link VALUES ('$meet_link')";
		

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";

			echo ("\n$meet_link");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
