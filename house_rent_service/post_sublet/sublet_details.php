<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SubLet Ads</title>
  <link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="header.css" rel="stylesheet">
<link href="footer.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>

<style type="text/css">
body{
  background-color: #E3E6E3;
}

.tcontainer table{
    background: #FFFFFF;
    width: 80%;
    box-shadow: 0px 0px 3px 3px #888888;
    margin-bottom: 10px;
}
.tcontainer tr{
    height: 80px;

}

.vbutton {
    background-color:#3252E7;
    border: none;
    color: white;
    padding: 6px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    cursor: pointer;
    float: right;
}
.vbutton:hover{
    background: #D980FA;
}

</style>
<body style="">

     <!--Header-->
 <div class="header">     
<div id="lheader" style="position:absolute;overflow:hidden;text-align:left;left:0%;top:0px;width:100%;height:110px;z-index:1;">
<div id="wb_wb_icon" style="position:absolute;left:35px;top:30px;width:184px;height:51px;z-index:0;">
<img src="images/43828198_486876531813213_6826910710958653440_n.png" id="wb_icon" alt=""></div>
</div>
<div id="wstitle" style="position:absolute;left:215px;top:19px;width:499px;height:110px;z-index:2"><span>&#2476;&#2494;&#2524;&#2495;&#2477;&#2494;&#2524;&#2494;.&#2453;&#2478;</span></div>

<button class="signinbtn">SIGN IN</button>

<div id="wb_contact" style="position:absolute;left:1194px;top:8px;width:236px;height:18px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:16px;">+88 01521 245874 (9am - 10pm)</span></div>
<div id="wb_c_icon" style="position:absolute;left:1158px;top:6px;width:30px;height:24px;text-align:center;z-index:5;">
<div id="c_icon"><i class="material-icons">&#xe61d;</i></div></div>
<div id="wbmoto" style="position:absolute;left:600px;top:57px;width:416px;height:55px;z-index:7"><span>&#2476;&#2494;&#2524;&#2495;&#2477;&#2494;&#2524;&#2494;&#2480; &#2488;&#2489;&#2460; &#2488;&#2478;&#2494;&#2471;&#2494;&#2472;</span></div>
</div>

    <!--Header-->

    <!--Navbar-->

<div class="topnav" id="myTopnav">
  <a href="../index/index.php" class="active" style="color: #f2f2f2;">Home</a>
  <a href="../post_to_let/post.php">To-Let</a>
  <a href="sublet_details.php">Sublet</a>
  <div class="dropdown">
    <button class="dropbtn">Post 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../post_to_let/post_to_let.html">Post To-Let</a>
      <a href="../post_sublet/post_sublet.html">Post Sublet</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Roommate 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../post_roommate/roommate_ads.php">Roommate Ads</a>
      <a href="../post_roommate/post_roomate.html">Post Roommate</a>
    </div>
  </div>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script type="text/javascript" src="navbar.js"></script>

<!--Navbar-->

<div class="sublet_heading">
  <table align="center" style="margin-top: 20px;background-color: #7ed6df;width: 80%;margin-bottom: 20px;">
    <tr>
      <th style="font-size: 48px;">SUBLET ADs</th>
    </tr>
  </table>
</div>


  <?php 
  	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die("connection failed: ".mysqli_error());
	}
	if(!mysqli_select_db($con,'dotcom')){
		echo "Database not selected";
	}
	$sql = "SELECT * FROM sublet";
	$data = mysqli_query($con,$sql);
	
	$total = mysqli_num_rows($data);
	if ($total!=0) {
        while($result = mysqli_fetch_assoc($data)){
    ?>
        <div class="tcontainer">
        <table align="center">
            <tr>
                <td>
                    <?php
                       echo '<img src="'.$result['picture'].'" alt="HTML5 Icon" style="width:300px;height:212px;">';
                    ?>
                </td>
                <div class="postd">
                <td style="font-size: 20px;line-height: 40px;text-transform: uppercase;font-family: Roboto;">
                    <?php 
                         echo "<strong>".$result['title']."</strong>";
                    ?><br/>
                    <?php 
                        echo "<strong>"."Location: "."</strong>".$result['location'];
                    ?><br/>
                    <?php
            echo "<strong>"."Floor No: "."</strong>".$result['floor']."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<strong>"."Balcony: "."</strong>".$result['balcony'];
        ?><br/>
        <?php
            echo "<strong>"."Available: "."</strong>".$result['available_from']."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<strong>"."BDT: "."</strong>".$result['rent_price']."&nbsp;&nbsp;&nbsp;&nbsp;";
            ?>
            <br/>
            <form action="">
            <button class="vbutton" style="">Details</button>
        </form>
                </td>
            </div>
            </tr>
        </table></div><br/>
<?php
        }
    }
?> 

<!--Footer-->

<div class=footer style="height: 195px;">
  <table>
    <tr>
      <th style="padding-right: 200px;">
        <div id="wb_Text1" style="left:40px;top:13px;width:170px;height:32px;z-index:5;text-align:left;margin-top: 10px;">
<span style="color:#ccc;font-family:Roboto;font-size:16px;text-transform: uppercase;">Company</span></div>
      </th>
      <th style="padding-right: 200px;">
        <div id="wb_Text2" style="left:321px;top:13px;width:170px;height:32px;z-index:6;text-align:left;margin-top: 10px;">
<span style="color:#ccc;font-family:Roboto;font-size:16px;text-transform: uppercase;">Explore</span></div>
      </th>
      <th style="padding-right: 200px;">
        <div id="wb_Text3" style="left:632px;top:13px;width:170px;height:32px;z-index:7;text-align:left;margin-top: 10px;">
<span style="color:#ccc;font-family:Roboto;font-size:16px;text-transform: uppercase;">Follow Us</span></div>
      </th>
    </tr>
  </table>
  <table>
    <tr>
      <th style="padding-right: 200px;">
        <div id="wb_TextMenu1" style="left:40px;top:66px;width:168px;height:121px;z-index:2;text-align: left;">
<span>&gt;  <a href="" style="text-decoration: none;">About Us</a></span>
<span>&gt;  <a href="" style="text-decoration: none;">Contact Us</a></span>
<span>&gt;  <a href="" style="text-decoration: none;">Terms &amp; Conditions</a></span>
<span>&gt;  <a href="" style="text-decoration: none;">Legal Notice</a></span>
<span>&gt;  <a href="" style="text-decoration: none;">Privacy Policy</a></span>
</div>
      </th>
      <th style="padding-right: 200px;">
        <div id="wb_TextMenu2" style="left:321px;top:66px;width:200px;height:121px;z-index:3;text-align: left;">
<span>&gt;  <a href="" style="text-decoration: none;">Advertise With Us</a>  </span>
<span>&gt;  <a href="" style="text-decoration: none;">Client&apos;s Benefits</a>  </span>
<span>&gt;  <a href="" style="text-decoration: none;">FAQ</a>  </span>
</div>
      </th>
      <th style="padding-right: 200px;">
        <div id="wb_TextMenu3" style="left:632px;top:66px;width:84px;height:121px;z-index:4;text-align: left;">
<span><a href="" style="text-decoration: none;"><i class="fab fa-facebook-square" style="padding-right: 5px;"></i>Facebook</a></span>
<span><a href="" style="text-decoration: none;"><i class="fab fa-twitter-square" style="padding-right: 5px;"></i>Twitter</a></span>
<span><a href="" style="text-decoration: none;"><i class="fab fa-youtube-square" style="padding-right: 5px;"></i>Youtube</a></span>
</div>
      </th>
    </tr>
  </table>
</div>

<div class="copyright">
  <table>
    
      <div id="wb_Text4" style="left:31px;top:235px;width:325px;height:16px;z-index:9;padding-top: 14px;padding-left: 10px;" class="Heading 2 <h2>">
<span style="color:#707070;font-family:Arial;font-size:13px;">Copyright © 2018 Barivara BD. All rights reserved.</span></div>
    
  </table>
</div>
<!--Footer-->

</body>
</html>