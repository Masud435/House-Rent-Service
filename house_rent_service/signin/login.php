<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'baribharadotcom')){
		echo "Database not selected";
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM information WHERE email ='".$email."' AND password = '".$password."' LIMIT 1";
		
		$result = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($result)==1){
			echo "Successfully logged in";
			exit();
		}
		else{
			echo "Password or username is incorrect";
			exit();
		}
	}

	/*if(!empty($name) || !empty($address) || !empty($contact) || !empty($email) || !empty($epassword) || !empty($cpassword)){			
			if($epassword == $cpassword){
			$sql = "INSERT INTO information(name,address,contact,email,password,picture) VALUES('$name','$address','$contact','$email','$epassword','$folder')";
			if(!mysqli_query($con,$sql)){
			    echo "Email Already used madafaka";
			}
			else{
				echo "Data inserterd successfully!";
			}

			}
			else{
				echo "Password didn't match";
			}
	}
	else{
		echo "All fields are needed to be filled";
		die();
	}*/
?>