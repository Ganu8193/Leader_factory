<?php 
session_start();


	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


	require_once('../config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Leader Factory</title>

	<style>
		body{
			margin: 50px;
			/*margin-right: 50px;			*/
			color: white;
			font-size: 25px;
			/*font-weight: bold;*/
			font-style:  ;
		}
		.logo{
			width: 160px;
			margin: auto;
		}
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
		#logout{
			float: right;
			margin: auto;
			background-color: #000000;
			padding: 12px 12px;
			border-radius: 5px;
			border: none;
		}
		#logout a{
			
			text-decoration: none;
			color: white;
		}
		#logout:hover{
			cursor: pointer;
			background-color: #2C3333;
			transition: 0.3s all;
		}
		#db-btn{
			color: white;
			/*float: right;*/
			margin: auto;
			background-color: #000000;
			padding: 12px 12px;
			border-radius: 5px;
			border: none;
		}
		form button a{
			
			text-decoration: none;
			color: white;
		}
		#db-btn:hover{
			cursor: pointer;
			background-color: #2C3333;
			transition: 0.3s all;
		}
		form input{
			padding: 7px;
			border: none;
		}
		#update{
			margin-left: 10px;
			background-color: black;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 4px;
		}
		#update:hover{
			cursor: pointer;
			background-color: #2C3333;
			transition: 0.3s all;
		}
	</style>
</head>
<body>

	<div id="bg"></div>
	<img class="logo" src="images/LF-image.jpeg">
	<button id="logout"><a href="logout.php">Logout</a></button>

	<br><br><br>

	<p>Hello, <?php echo $user_data['username'] ;?> and welcome to Leader Factory.</p>
	<form action="../output.php">
		<p>Check database of registered participants &#8594; <button id="db-btn">Database</button></p></form>
	<form action="insert.php" method="post">
	<p>Update new meet-link through &#8594; <input type="text" placeholder="meet-link"></input><button class="btn btn-primary" type="submit" id="update">Update</button> </p>
	
	</form>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#update').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var meet_link 	= $('#meet_link').val();

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'insert.php',
					data: {meet_link: meet_link},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'

								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}


		});		

		
	});
	
</script> -->

</body>
</html>