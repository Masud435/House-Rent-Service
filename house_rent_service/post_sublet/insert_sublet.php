<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'dotcom')){
		echo "Database not selected";
	}
	$adtitle = $_POST['adtitle'];
	$location = $_POST['location'];
	$road = $_POST['road'];
	$house = $_POST['house'];
	$floor = $_POST['floor'];
	$balcony=$_POST['select1'];
	$rentprice = $_POST['rentprice'];
	$servicecharge = $_POST['servicecharge'];
	$securitydeposit = $_POST['securitydeposit'];
	$availablefrom = $_POST['availableFrom'];
	$contact = $_POST['contact'];

	$filename = $_FILES["img"]["name"];
	$tempname = $_FILES["img"]["tmp_name"];
	$folder = "images/".$filename;
	move_uploaded_file($tempname, $folder);

	if(!empty($adtitle) || !empty($location) || !empty($road) || !empty($house) || !empty($floor) || !empty($balcony) || !empty($rentprice) || !empty($servicecharge) || !empty($securitydeposit) || !empty($filename) || !empty($availablefrom) || !empty($contact)){
		$sql = "INSERT INTO sublet(title,location,road,house,floor,balcony,rent_price,service_charge,security_deposit,picture, available_from,contact) VALUES('$adtitle','$location','$road','$house','$floor','$balcony','$rentprice','$servicecharge','$securitydeposit','$folder','$availablefrom','$contact')";
		if(!mysqli_query($con,$sql)){
			    echo "Error: " . $sql . "<br>" . mysqli_error($con);
;
		}
		else{
			echo "Data inserterd successfully!";
			header('Location: ../index/index.php');
		}
	}
	else{
		echo "All fields are needed to be filled";
		die();
	}

?>