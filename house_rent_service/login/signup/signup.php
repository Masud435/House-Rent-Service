<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'dotcom')){
		echo "Database not selected";
	}

	$username = $_POST['username'];
	$email = $_POST['email'];
	$epassword = $_POST['epassword'];
	$cpassword = $_POST['cpassword'];

	if(!empty($username) || !empty($email) || !empty($epassword) || !empty($cpassword)){
		$sql = "INSERT INTO registration(username,email,password) VALUES('$username','$email','$epassword')";
		if(!mysqli_query($con,$sql)){
			    echo "Error: " . $sql . "<br>" . mysqli_error($con);
;
		}
		else{
			header('Location: ../login/login.html');
		}
	}
	else{
		echo "All fields are needed to be filled";
		die();
	}

?>