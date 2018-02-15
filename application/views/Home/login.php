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
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designloginxx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                      <div id="hdr"></div>
                       <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
                                            <li><a href="homes" >HOME</a></li>
  		<li id="abt"><a href="about" >ABOUT</a></li>
                                            <div class="drpcntnt">
                                                <a href="aboutbns">About</a>
                                                <a href="aboutdev">Developers</a>
                                                <a href="homemission">Mission</a>
                                                <a href="homevision">Vision</a>
                                                <a href="contact">Contact Us</a>
                                            </div>
                                            <li><a href="signup" >SIGN UP</a></li>
                		<li style="color: #000; background-color: #E5E8E8;">LOG IN</li>
                                
	</ul>
	</div>
<img src="<?php echo base_url(); ?>images/libgg.png" alt="Background" style='width: 500px; margin-left: 425px; margin-top: -70px;'/>
<div id="container">
	
	
	<form method="post">

		<div class="container">
		<label id="lbl1"><b>Username:</b></label>
		<input type="text" name="username" required>

		<label id="lbl2"><b>Password:</b></label>
		<input type="password"name="password" required><br/><br/>
			
		<input  class="loginbtn" type="submit" name="login" value="LOGIN"><br/>
                                            <a href="#" class="fpp">Forgot password?</a>

	</form>
	
	
	
	
</div>


</body>
</html>