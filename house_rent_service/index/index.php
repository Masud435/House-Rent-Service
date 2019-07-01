<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Index</title>
<link rel="stylesheet" href="post_property.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="header.css" rel="stylesheet">
<link href="footer.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="carousel.css">
<link href="footer.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

<!--SignIn-->
<!--SignIn-->
</head>
<style type="text/css">
 
.carousel-inner img {
      width: 100%;
      height: 100%;
}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 0px;
    right: 0px;
    width: 240px;
    height: 30px;
    border-top-left-radius: 30px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

.form-container input{
  width: 100%;
  padding: 12px;
  border: none;
  resize: none;
  background: #f1f1f1;
  font-family: monospace;

}
/* When the textarea gets focus, do something */
.form-container textarea:focus  {
  background-color: #ddd;
  outline: none;
}
.form-container input:focus  {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.chat-popup label{
  padding: 12px 12px 20px 0px; 
}

a:hover{
  color: #3498db;
}

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
<body>

<!--Offline Chat-->
<button class="open-button" onclick="openForm()">
<img src="images/chat_icon.png" style="float: left;height: 30px;margin-top: -10px"><p style="margin-top: -6px;">Live help is offline</p></button>


<div class="chat-popup" id="myForm">
  
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1><br/>

    <label for="msg"><b>Name*</b></label>
    <input type="text" id="uname" name="uname" required="required" placeholder="Type your name">
    <label for="msg"><b>Email*</b></label>
    <input type="text" id="uname" name="uname" required="required" placeholder="Type your email">
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
<!--Offline chat-->




 <!--Header-->
 <div class="header">     
<div id="lheader" style="position:absolute;overflow:hidden;text-align:left;left:0%;top:0px;width:100%;height:110px;z-index:1;">
<div id="wb_wb_icon" style="position:absolute;left:35px;top:30px;width:184px;height:51px;z-index:0;">
<img src="images/43828198_486876531813213_6826910710958653440_n.png" id="wb_icon" alt=""></div>
</div>
<div id="wstitle" style="position:absolute;left:215px;top:19px;width:499px;height:110px;z-index:2;"><span>&#2476;&#2494;&#2524;&#2495;&#2477;&#2494;&#2524;&#2494;.&#2453;&#2478;</span></div>
<form action="../login/login.html">
<button class="signinbtn">SIGN IN</button>
</form>
<div id="wb_contact" style="position:absolute;left:1194px;top:8px;width:236px;height:18px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:16px;">+88 01521 245874 (9am - 10pm)</span></div>
<div id="wb_c_icon" style="position:absolute;left:1158px;top:6px;width:30px;height:24px;text-align:center;z-index:5;">
<div id="c_icon"><i class="material-icons">&#xe61d;</i></div></div>
<div id="wbmoto" style="position:absolute;left:600px;top:57px;width:416px;height:55px;z-index:7"><span>&#2476;&#2494;&#2524;&#2495;&#2477;&#2494;&#2524;&#2494;&#2480; &#2488;&#2489;&#2460; &#2488;&#2478;&#2494;&#2471;&#2494;&#2472;</span></div>
</div>

    <!--Header-->

    <!--Navbar-->

<div class="topnav" id="myTopnav" style="margin-top: 89px;">
  <a href="../index/index.php" class="active" style="color: #f2f2f2;">Home</a>
  <a href="../post_to_let/post.php">To-Let</a>
  <a href="../post_sublet/sublet_details.php">Sublet</a>
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

<!--Carousel-->
<div class="container">
  
  <div class="mySlides">
    <div class="numbertext">1 / 4</div>
    <img src="images/slide1.jpg" style="width:100%;height: 300px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <img src="images/slide2.jpg" style="width:100%;height: 300px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <img src="images/slide3.jpg" style="width:100%;height: 300px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 4</div>
    <img src="images/slide4.jpg" style="width:100%;height: 300px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<!--Carousel-->

<!--To Let-->
<div class="to_let_heading">
  <table align="center" style="margin-top: 20px;background-color: #7ed6df;width: 80%;margin-bottom: 20px;">
    <tr>
      <th style="font-size: 48px;">TO-LET ADs</th>
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
    $sql1 = "SELECT * FROM tolet ORDER BY id DESC";
    $data1 = mysqli_query($con,$sql1);
  
    $total1 = mysqli_num_rows($data1);
    $cnt1=$total1-2;
    
      while($result1 = mysqli_fetch_assoc($data1)){
if($total1!=$cnt1){
?>
    <div class="tcontainer">
      <table align="center">
        <tr>
          <td>
            <?php
              echo '<img src="../post_to_let/'.$result1['picture'].'" alt="HTML5 Icon" style="width:300px;height:212px;">';
            ?>
          </td>
            <div class="postd">
              <td style="font-size: 20px;line-height: 40px;text-transform: uppercase;font-family: Roboto;">
                <?php 
                    echo "<strong>".$result1['title']."</strong>";
                ?><br/>
                <?php 
                  echo "<strong>"."Location: "."</strong>".$result1['location'];
                ?><br/>
                <?php
                  echo "<strong>"."Floor No: "."</strong>".$result1['floor']."&nbsp;&nbsp;&nbsp;&nbsp;";
                  echo "<strong>"."Balcony: "."</strong>".$result1['balcony'];
                ?><br/>
                <?php
                  echo "<strong>"."Available: "."</strong>".$result1['available_from']."&nbsp;&nbsp;&nbsp;&nbsp;";
                  echo "<strong>"."BDT: "."</strong>".$result1['rent_price']."&nbsp;&nbsp;&nbsp;&nbsp;";
                ?><br/>
                <form action="">
                  <button class="vbutton" style="">Details</button>
                </form>
              </td>
            </div>
        </tr>
      </table>
    </div><br/>
    <?php 
$total1 = $total1 - 1;    
}

}
     ?>
<div class="view_more" style="margin-bottom: 30px;">
  <table align="right">
    <tr>
      <th><a  style="font-size: 20px;color: #2980b9;" href="../post_to_let/post.php">view more</a></th>
    </tr>
  </table>
</div>

<!--To Let-->

<!--Sublet-->
<div class="sublet_heading">
  <table align="center" style="margin-top: 20px;background-color: #7ed6df;width: 80%;margin-bottom: 20px;">
    <tr>
      <th style="font-size: 48px;">SUBLET ADs</th>
    </tr>
  </table>
</div>


<?php 
$sql2 = "SELECT * FROM sublet where id = (SELECT max(id) FROM sublet)";
    $data2 = mysqli_query($con,$sql2);
    
    $result = mysqli_fetch_assoc($data2);
?>
    <div class="tcontainer">
      <table align="center">
        <tr>
          <td>
            <?php
              echo '<img src="../post_sublet/'.$result['picture'].'" alt="HTML5 Icon" style="width:300px;height:212px;">';
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
                ?><br/>
                <form action="">
                  <button class="vbutton" style="">Details</button>
                </form>
              </td>
            </div>
        </tr>
      </table>
    </div><br/>

<div class="view_more" style="margin-bottom: 50px;">
  <table align="right">
    <tr>
      <th><a  style="font-size: 20px;color: #2980b9;" href="../post_sublet/sublet_details.php">view more</a></th>
    </tr>
  </table>
</div>
<!--Sublet-->

<!--Sublet-->
<!--<img src="images/roommate_ads.gif" style="margin-left: 480px;">
Sublet-->

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
