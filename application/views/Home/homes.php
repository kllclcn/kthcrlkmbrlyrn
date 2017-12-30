<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<style>
body{
background-color: #dc4343;
}
</style>
<script src="homescript.js"></script>

<head>
	<title>LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/designhome.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
	
	
</head>

<body>	
	<div class="mainbutton">
	<ul>
  		<li style="color: #000; background-color: #f8f9f9;">HOME</li>
  		<li><a href="about" >ABOUT</a></li>
  		<li><a href="signup" >SIGN UP</a></li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>

  <div class="Slides">
    <img class="mySlides" src="<?php echo base_url(); ?>images/p1.png" style="width:1330px;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/p2.png" style="width:1330px;display: none;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/p3.pngsrc="images/p3.png" style="width:1330px;display: none;">
    <img class="mySlides" src="<?php echo base_url(); ?>images/p4.png" style="width:1330px;display: none;">
    <button class="leftbtn" onclick="plusDivs(-1)"><img src="back1.png" id="nb1" onmouseover="this.src='back.png';" onmouseout="this.src='back1.png';" alt="Back"/></button>
    <button class="rightbtn" onclick="plusDivs(1)"><img src="next.png" id="nb1" onmouseover="this.src='next1.png';" onmouseout="this.src='next.png';" alt="Next"/></button>
  </div>


</body>
</html>