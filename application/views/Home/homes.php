<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<style>
body{
background-color: #dc4343;
}
</style>

<head>
    <title>HOME / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designhomes.css">
        <img src="<?php echo base_url(); ?>images/logo.png" alt="Background" style='margin-left:450px;'/>
	
	
</head>

<body>	
	<div class="mainbutton">
	<ul>
  		<li style="color: #000; background-color: #f8f9f9;">HOME</li>
  		<li id="abt"><a href="about" >ABOUT</a></li>
                                            <div class="drpcntnt">
                                                <a href="homemission">Mission</a>
                                                <a href="homevision">Vision</a>
                                            </div>
  		<li><a href="signup" >SIGN UP</a></li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>

  <div class="Slides">
    <img class="mySlides" src="<?php echo base_url(); ?>images/pp1.png" style="width:1330px;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/pp2.png" style="width:1330px;display: none;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/pp3.png" style="width:1330px;display: none;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/pp4.png" style="width:1330px;display: none;">
    <button class="leftbtn" onclick="plusDivs(-1)"><img src="<?php echo base_url(); ?>images/back1.png" id="nb1" onmouseover="this.src='<?php echo base_url(); ?>images/back.png';" onmouseout="this.src='<?php echo base_url(); ?>images/back1.png';" alt="Back"/></button>
    <button class="rightbtn" onclick="plusDivs(1)"><img src="<?php echo base_url(); ?>images/next.png" id="nb1" onmouseover="this.src='<?php echo base_url(); ?>images/next1.png';" onmouseout="this.src='<?php echo base_url(); ?>images/next.png';" alt="Next"/></button>
  </div>

  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1;}    
  if (n < 1) {slideIndex = x.length;}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>