<?php
require_once('config.php');

 if(!empty($fullname) && !empty($password) && !empty($email) && !empty($phonenumber)) 
    {
        //save to database
        $user_id = random_num(20);
        $query = "INSERT INTO admins (fullname, password, email, password) values('$fullname','$username', '$email', '$phonenumber')";

        mysqli_query($con, $query);

        header("Location: index.php");
        die;
  
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

	<div class="dropdown">
	  <button class="dropbtn"><i class="fas fa-user"></i> &#8595;</button>
	  <div class="dropdown-content">
	    <a href="registration.php">Visitor</a>
	    <a href="admin/login.php">Admin</a>
	  </div>
	</div>

<div id="bg"></div>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="form col-sm-3">
					<img class="logo" src="images/LF-image.jpeg">
					<h1 class="form-heading">Registration</h1>
					<p>Fill up the form to register</p>
					<hr class="mb-3">
					<label for="fullname"><b>Full Name</b></label>
					<input class="form-control" id="fullname" type="text" name="fullname" required>

					<label for="password" type ><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<hr class="mb-3">
					<button class="btn btn-primary" type="submit" id="register" name="create"><a href="">Register</a></button> 
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var fullname 	= $('#fullname').val();
			var password	= $('#password').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			// var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {fullname: fullname,password: password,email: email,phonenumber: phonenumber},
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
	
</script>
</body>
</html>