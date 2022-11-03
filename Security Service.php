<!DOCTYPE html>
<html><title>Security Services</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="login.php" class="w3-button w3-block">Login</a>
    </div>
    <div class="w3-col s3">
      <a href="plans.php" class="w3-button w3-block">Plans</a>
    </div>
    <div class="w3-col s3">
      <a href="new 1.php" class="w3-button w3-block">Contact</a>
    </div>
  </div>
</div>
<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <div class="w3-panel">
    <center> <h1><b><U>EAGLE'S EYE SECURITY SERVICES</U></b></h1> </center>
      </div>
<!-- Slideshow -->
     </div>
    <div class="w3-display-container mySlides">
      <center> <img src="security4.png"  style="width:30%" border="10"> </center>
     </div>
    <div class="w3-display-container mySlides">
      <img src="/w3images/sound.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
      </div>
    </div>
	<p><b><center>We take this opportunity to introduce ourselves as a highly professional security conscious organization, committed to achieve excellence for its esteemed clients,
EAGLE'S EYE SECURITY SERVICES PVT. LTD, one of the most trusted, highly professional and top Private security agencies, Committed to extend professional and quality services for its esteemed Clients.  private security industry, EAGLE'S EYE SECURITY SERVICES PVT LTD, has earned reputation and recognition in the industry</p></b></center>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge"></div>
  <center> <img src="sec2.png" style="width:30%"> </center>
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>

    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Bodyguard</h3>
      <p>We provide protective and trustworhty guards</p>
    </div>  <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Guard</h3>
      <p>We provide defensive and protective guards</p>
    </div><div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Watchman</h3>
      <p>We provide 24 hours surveillance</p>
    </div><div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>Bouncer</h3>
      <p>We provide immunity in party</p>
    </div>
  </div><!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
   <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a></footer>
<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script></body>
</html>
PHP linking to Database-
<?php
  $link = mysqli_connect("localhost", "root", "", "service_database");
   if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());    }
    $cust_id = mysqli_real_escape_string($link, $_REQUEST['cust_id']);
    $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
    $age = mysqli_real_escape_string($link, $_REQUEST['age']);
    $phone_num = mysqli_real_escape_string($link, $_REQUEST['phone_num']);
    $city = mysqli_real_escape_string($link, $_REQUEST['city']);
    $username = mysqli_real_escape_string($link, $_REQUEST['username']);
    $password = mysqli_real_escape_string($link, $_REQUEST['password']);
        $sql = "INSERT INTO customer_details (cust_id,first_name,last_name,age,phone_num,city,username,password) VALUES ('$cust_id','$first_name','$last_name','$age','$phone_num','$city','$username','$password')";
if(mysqli_query($link, $sql)){        echo "<script type='text/javascript'>alert('Registered successfully!')</script>";} else{
 echo "<script type='text/javascript'>alert('failed!')</script>";
        }   mysqli_close($link);
    ?>
