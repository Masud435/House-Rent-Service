<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'dotcom')){
		echo "Database not selected";
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) || !empty($password)){
		$sql = "SELECT * FROM registration WHERE username='".$username."' AND email = '".$email."')";
		if(!mysqli_query($con,$sql)){
			    echo "Error: " . $sql . "<br>" . mysqli_error($con);
;
		}
		else{
			header('Location: ../index/index.php');
		}
	}
	else{
		echo "All fields are needed to be filled";
		die();
	}

?>