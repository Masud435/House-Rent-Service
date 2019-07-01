<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>To-Let Details</title>
<link rel="stylesheet" type="text/css" href="view_details.css">
<style>

</style>
<body>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%;height: 300px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img_5terre_wide.jpg" style="width:100%;height: 300px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%;height: 300px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%;height: 300px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%;height: 300px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%;height: 300px;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

 

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<div class=ptitle style="background-color: #ff7675;margin-top: 15px;">
  <table style="text-transform: uppercase;">
    <tr>
    <th style="font-size: 40px;">Title:</th>
    <td style="font-size: 40px;">Ranjanigandha Housing Complex</td>
  </tr>
  <tr>
  </table>
</div>

<div class=plocation>
  <table align="left">
    <tr>
    <th style="font-size: 20px;">Location:</th>
    <td style="font-size: 20px;">Rupnagar Residential Area, Mirpu-2, Dhaka</td>
  </tr>
  <tr>
  </table>
</div>

<div class=hfeatures style="background-color: #e74c3c;width: 50%; margin-left: 340px;">
  <h1 style="text-transform: uppercase;margin-top: 50px;text-align: center;border: 3px solid #34495e;">features</h1>
</div>
<div class="features">
<table align="center" style="margin-top: 50px;">
  
  <tr>
    <th>Road No</th>
    <td>16</td>
  </tr>
  <tr>
    <th>House No</th>
    <td style="background: #c2deeb;">12</td>
  </tr>
  <tr>
    <th>Floor No</th>
    <td>3</td>
  </tr>
  <tr>
    <th>No of Room</th>
    <td style="background: #c2deeb;">3</td>
  </tr>
  <tr>
    <th>Washroom</th>
    <td>3</td>
  </tr>
  <tr>
    <th>Balcony</th>
    <td style="background: #c2deeb;">3</td>
  </tr>
  <tr>
    <th>Rent Price</th>
    <td>13000</td>
  </tr>
  <tr>
    <th>Service Charge</th>
    <td style="background: #c2deeb;">2000</td>
  </tr>
  <tr>
    <th>Security Deposit</th>
    <td>15000</td>
  </tr>
</table>
</div>

<div class="availcon">
  <table align="center" style="margin-top: 50px;">
    <tr>
      <th>Available From:
        <td>1/1/2019</td></th>
        <th style="padding-left: 20px;">Contact:
        <td>+8801521245874</td></th>
    </tr>
  </table>
</div>

<div class="confirm" style="margin-top: 30px">
  <h2 style="text-align: center;">If you want to confirm, send us confirm request</h2>
  <form>
  <input type="text" name="" placeholder="Enter post title" style="margin-bottom: 15px;"><br/>
  <input type="text" name="" placeholder="Confirm message">
<button onclick="myFunction()" class="confirmbtn" style="margin-left: 925px;margin-top: 30px;">Confirm</button> 
</form>
</div>
<form action="../index/index.php">
<button class="confirmbtn" style="margin-left: 945px;">Back</button>
</form>

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

<script>
function myFunction() {
    var txt;
    var r = confirm("Press a button!\nEither OK or Cancel.\nThe button you pressed will be displayed in the result window.");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>



</body>
</html>
