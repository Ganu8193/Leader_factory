<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(5);
			$query = "insert into admins (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

	<style type="text/css">
	#bg {
		background-image: url('images/background.jpg');
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background-size: cover;
		filter: blur(5px);
		max-height: 900px;
		z-index: -1;
	}

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
		border-radius: 5px;
		padding: 10px;
		width: 100px;
		color: white;
		background-color: #0AA1DD;
		border: none;
		}
	
	#button:hover{
		color: black;
		background-color:#79DAE8;
		transition: 0.3s all;
		}

	#box{
		border-radius: 10px;
		background-color: #E8F9FD;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	.dropbtn {
		background-color: black;
		color: white;
		padding: 16px 20px;
		font-size: 16px;
		border: none;
	}

	.dropdown {
		
		margin-top: 100px;
		margin-left: 100px;
		float: right;
		margin-right: 50px;
		z-index: 1;
		position: relative;
		/* display: inline-block; */
	}

	.dropdown-content {
		/* margin-left: 100px; */
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 20px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 11px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {background-color: #ddd;}

	.dropdown:hover .dropdown-content {display: block;}

	.dropdown:hover .dropbtn {
		background-color: #112B3C;
		transition: 0.3s all;	
	}
	
	</style>

	<div id="bg"></div>
	
	<div class="dropdown">
      <button class="dropbtn"><i class="fas fa-user"></i> &#8595;</button>
      <div class="dropdown-content">
        <a href="../registration.php">Visitor</a>
        <a href="#">Admin</a>
      </div>
    </div>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;"><i class="fas fa-users"></i> Signup</div><br>

			<input id="text" type="text" name="username" placeholder="Username "><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<p>Account exists? Click to   <a href="login.php"> Login</a></p>
		</form>
	</div>
</body>
</html>