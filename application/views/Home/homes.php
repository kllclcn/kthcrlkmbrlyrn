<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>
    <title>HOME / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designhome.css">	
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">	
                      <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:480px;'/>
	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #f8f9f9;">HOME</li>
  		<li id="abt"><a href="about" >ABOUT</a></li>
                                            <div class="drpcntnt">
                                                <a href="aboutbns">About</a>
                                                <a href="aboutdev">Developers</a>
                                                <a href="homemission">Mission</a>
                                                <a href="homevision">Vision</a>
                                                <a href="contact">Contact Us</a>
                                            </div>
  		<li><a href="signup" >SIGN UP</a></li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>
      <div class="slideshow-container">
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/a1.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/a2.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/a3.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/a4.png" />
                    </div>
                  </div>
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html>