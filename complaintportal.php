<!DOCTYPE html>
<html lang="en">
<head>
	<title> Alaskent Complaint Portal</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content= "width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
function myFunction() {
  	var x = document.getElementById("myTopnav");
  	if (x.className === "topnav") {
   	 x.className += " responsive";
  	} 
	else {
    	x.className = "topnav";
  	}
}
</script>

<nav class="topnav">
	<a class="active" href="#logo">HOME</a>
	<a href="s_login.php" target="new">COMPLAINT FORM</a>
	<a href="#about">ABOUT</a>
	<a href="#contact">CONTACT</a>
  <a href="a_login.php" target="new">ADMIN LOGIN</a>   
</nav>

<div class="logo" id="logo">
	<a href="./complaintportal.php">
		<img src=img/logo.png alt="Alaskent" style="height: 170px; width: 200px; object-fit: contain; padding: 0px;">
	</a>
</div>

<div class="heading" id="home">
	<p>COMPLAINT DESK</p>
</div><br><br><br><br>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/office4.jpg" style="width:100%">
    <div class="text">Alaskent Tech Firm</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/office2.jpg" style="width:100%">
    <div class="text">Alaskent Tech Firm</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div> 
    <img src="img/office1.jpg" style="width:100%">
    <div class="text">Alaskent Tech Firm</div>
  </div>


</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<div class="about" id="about">
	<h2 style="color: #670fd4; text-align: center;">ABOUT</h2>
<div class="aboutp">
	<h3 style="text-align: center;">ABOUT PORTAL</h3>
        <p>
        Alaskent believe it is essential to maintain integrity and professionalism at the workplace to achieve optimum efficiency. <br>
We invite our clients to address their complaints, issues, and concerns regarding any of our employees. Your valuable recommendations will be taken into consideration and further improved. <br>
We pledge to meet all of your requirements to the best of our abilities.  	 <br>
        </p>
</div>
<div class="aboutp">
	<h3 style="text-align: center;">ABOUT ALASKENT</h3>
	<p>
	Alaskent Pvt. Ltd. is a New York-based consultancy firm. We are the trusted advisor to the world's most prestigious corporations, governments, and institutions. <br>
We work with leading organisations across the private, public, and non-profit sectors to bring out the best in each one of them with an extensive functional and industrial knowledge. We aim to build companies and skills at every level and opportunity. <br>
	</p>
</div> 
</div>

<div class="contact" id="contact">
	<h2 style="color: #320669; text-align: center;">CONTACT US</h2>
	<p>
		<i class="fa fa-map-marker" style="font-size:20px;color:red"></i>
		Alaskent Pvt. Ltd., Newyork, USA
	</p>
	<p>
		<i class="fa fa-phone" style="font-size:20px;color:red"></i>
		02563 – 286545 / 286546 / 286547 / 286548 / 286549 / 286550
	</p>
</div>
<div class="reach id="reach">
	<p>Reach us via
            <a href="mailto:complaintportal@example.com" style="font-style: bold;"><i class="fa fa-envelope"></i></a>
            <a href="https://www.facebook.com" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com" target="_blank" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank" class="instagram-bg"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com" target="_blank" class="youtube-bg"><i class="fa fa-youtube"></i></a>
	</p>
</div>

			

	

	