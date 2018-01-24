<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designhomex.css">	
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                    <div id="hdr"></div>
                      <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">HOME</li>
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
                      <img src="<?php echo base_url(); ?>images/h1.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/h2.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/h3.png" />
                    </div>
                    <div class="mySlides fade">
                      <img src="<?php echo base_url(); ?>images/h4.png" />
                    </div>
                  </div>
           <div class="mainn">
                          
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