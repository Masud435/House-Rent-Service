<?php
	$username=$_POST['username'];
	$email=$_POST['email'];
	$epassword=$_POST['epassword'];
	$cpassword=$_POST['cpassword'];
	if(!empty($username) || !empty($email) || !empty($epassword) || !empty($cpassword)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "barivaradotcom";
		
		$con = new mysqli($host,$dbUsername,$dbPassword,$dbname);
		
		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error);
		}
			$sql="";
			if($epassword == $cpassword){
			$sql = "INSERT INTO owner_customer(username,email,password) VALUES('$username','$email','$epassword')";
			}
			else{
				echo "Password didn't match";
			}
			if(mysqli_multi_query($con,$sql)){
				echo "New records created successfully";
			}
			else{
				echo "Error: ". $sql . "<br>" . mysqli_error($con);
			}
		mysqli_close($con);
			
	}
	else{
		echo "All fields are needed to be filled";
		die();
	}
?>

