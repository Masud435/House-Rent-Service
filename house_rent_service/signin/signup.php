<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'baribharadotcom')){
		echo "Database not selected";
	}

	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$epassword=$_POST['epassword'];
	$cpassword=$_POST['cpassword'];

	$filename = $_FILES["img"]["name"];
	$tempname = $_FILES["img"]["tmp_name"];
	$folder = "images/".$filename;
	move_uploaded_file($tempname, $folder);

	if(!empty($name) || !empty($address) || !empty($contact) || !empty($email) || !empty($epassword) || !empty($cpassword)){			
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
	}
?>