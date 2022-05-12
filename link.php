<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meet link</title>
	<link rel="stylesheet" type="text/css" href="link.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<div id="bg"></div>
	<br>
	<div class="container">
		<div class="row">
			<div class="meet_heading col-lg-6 col-md-6 col-sm-12">
				<i><h3>Use this roll no. as your username in the meet:</h3></i>
			</div>		

			
		</div>
	</div>
	<div class="roll">
	<?php
		$conn = mysqli_connect("localhost","root","","leader_factory");
		if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
		$result = $conn-> query($sql);

		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["id"]."</td></tr>";
			}
		}
	?>
	</div>


	<!-- <div id="meet_link">
		<?php
		$conn = mysqli_connect("localhost","root","","leader_factory");
		if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT * FROM meet_link ORDER BY meet_link DESC LIMIT 1";
		$result = $conn-> query($sql);

		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["meet_link"]."</td></tr>";
			}
		}
	?>
	</div> -->

	
	<br>

	<div class="container">
		<div class="row">
			<div class="meet_link col-lg-4 col-md-6 col-sm-6">
				<img class = "logo" src="images/LF-image.jpeg">
			</div>
		<div class="meet_link col-lg-4 col-md-6 col-sm-12">
				<p>Meet Link:</p>
				<button class="join_btn" value="#meet_link">Join</button>
		</div>
					
		</div>
	</div>
	

</body>
</html>