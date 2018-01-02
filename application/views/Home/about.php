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
	<title>LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/designabout.css">
                       <script src="aboutscript.js"></script>
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
	
	
</head>

<body>	
	<div class="mainbutton">
	<ul>
  		<li><a href="homes">HOME</a></li>
  		<li style="color: #000; background-color: #f8f9f9;">ABOUT</li>
  		<li><a href="signup" >SIGN UP</a></li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>

	<div class="bg" style="height:700px; width:100%; background-image: url(ab.png);">
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'About')" style="padding-right:75px">About</button>
    		<button class="tablinks" onclick="openCity(event, 'Mission')" style="padding-right:66.5px">Mission</button>
    		<button class="tablinks" onclick="openCity(event, 'Vision')" style="padding-right:75.5px">Vision</button>
  		</div>

		<div class="tabcontents"></div>

  		<div id="About" class="tabcontent"></div>

  		<div id="Mission" class="tabcontent">
    		<h3>PUP BUY AND SELL MISSION</h3>
    		<p id="p1">&nbsp;&nbsp;&nbsp;&nbsp;To empower online sellers to succeed in delivering a high quality</p1>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;shopping experience and to provide a variety of service, products</p>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;and other solutions that improves the quality of the everyday life</p>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;of the consumers.</p>
  			</div>

  		<div id="Vision" class="tabcontent">
    		<h3>PUP BUY AND SELL VISION</h3>
    		<p id="p1">&nbsp;&nbsp;&nbsp;&nbsp;To continuously innovate to be the best destination for the </p1>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;consumers and sellers and to assist online sellers to sell with the ease</p>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;and efficiency, while the consumers enjoy a personalized e-Commerce </p>
    		<p>&nbsp;&nbsp;&nbsp;&nbsp;experience regardless of their location or device.</p>
  		</div>
	</div>

    <script>
        function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
        </script>
</body>
</html>
