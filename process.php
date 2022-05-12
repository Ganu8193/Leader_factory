<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$fullname 		= $_POST['fullname'];
	$password 		= $_POST['password'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	// $password 		= $_POST['password'];

		$sql = "INSERT INTO users (fullname, password, email, phonenumber) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fullname, $password, $email, $phonenumber]);
		if($result){
			echo 'Successfully saved.';
			// header("Location: link.php");
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}
