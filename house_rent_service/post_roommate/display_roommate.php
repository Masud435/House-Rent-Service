<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<style type="text/css">
	
</style>
<body>
  <?php 
  		$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'baribharadotcom')){
		echo "Database not selected";
	}
	$sql = "SELECT * FROM roommate";
	$data = mysqli_query($con,$sql);
	

         $result = mysqli_fetch_assoc($data);

         echo "title = ".$result['title'];
         ?>
         
         
</body>
</html>