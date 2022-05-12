<?php
require_once('../config.php');
?>
<?php

if(isset($_POST)){

	$meet_link 		= $_POST['meet_link'];
	// $lastname 		= $_POST['lastname'];
	// $email 			= $_POST['email'];
	// $phonenumber	= $_POST['phonenumber'];
	// $password 		= $_POST['password'];

		$sql = "INSERT INTO meet_link (meet_link) VALUES(?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$meet_link]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}
