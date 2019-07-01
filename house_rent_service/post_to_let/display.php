<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<style type="text/css">
.image{
	margin-top: 0px;
}
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
	$sql = "SELECT * FROM to_let";
	$data = mysqli_query($con,$sql);
	
	$total = mysqli_num_rows($data);
	if ($total!=0) {
    
        while($result = mysqli_fetch_assoc($data)){
        	echo '<img src="'.$result['picture'].'" alt="HTML5 Icon" style="width:300px;height:300px;">';
        	
    ?>
    
    <div class="to_let" style="font-size: 30px;font-family:Berlin Sans FB; background:#8c7ae6;text-decoration:uppercase;border: 3px solid #3c6382;width: 50%;margin-left: 350px;margin-bottom:300px;">

        <?php  ?>
    <div style="margin-bottom: 7px;margin-top: 60px;">
    	<?php  

        	echo "<strong>"."Title: "."</strong>".$result['title'];
        	echo "<br>";
    	?>
    </div>
    
    <div style="margin-bottom: 7px;">
    	<?php
        	echo "<strong>"."Location: "."</strong>".$result['location'];
        	echo "<br>";
    	?>
	</div>

	<div style="margin-bottom: 7px;">
    	<?php    
        	echo "<strong>"."Road No: "."</strong>".$result['road_no']."&nbsp;&nbsp;&nbsp;&nbsp;";
        	echo "<strong>"."House No: "."</strong>".$result['house_no'];
        	echo "<br>";
    	?>
    </div>
	
	<div style="margin-bottom: 7px;">
		<?php
        	echo "<strong>"."Floor No: "."</strong>".$result['floor_no']."&nbsp;&nbsp;&nbsp;&nbsp;";
        	echo "<strong>"."No of Room: "."</strong>".$result['no_of_room']."&nbsp;&nbsp;&nbsp;&nbsp;";
        	echo "<strong>"."Washrooms: "."</strong>".$result['washrooms']."&nbsp;&nbsp;&nbsp;&nbsp;";
        	echo "<strong>"."Balcony: "."</strong>".$result['balcony'];
        	echo "<br>";
    	?>
	</div>

	<div style="margin-bottom: 7px;">
		<?php
        echo "<strong>"."Rent Price: "."</strong>".$result['rental_price']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<strong>"."Service Charge: "."</strong>".$result['service_charge']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<strong>"."Security Deposit: "."</strong>".$result['security_deposit']; 
        echo "<br>";
        ?>
    </div>
    <div style="margin-bottom: 7px;">
    	<?php
        echo "<strong>"."Available From: "."</strong>".$result['available_from']."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<strong>"."Contact: "."</strong>".$result['contact'];
        echo "<br>";
        ?>
    </div>
    </div>     


    <?php echo "<br>";?>

    <div class="to_let" style="background:#ffffff;">
    <?php 
    }

     }
     ?>
 </div>
</body>
</html>