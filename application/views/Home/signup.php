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
	<title> PUP Buy and Sell </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/designsignup.css">
	<img src="<?php echo base_url(); ?>images/main.png" alt="Background" style='width: 100%;'/>
	
</head>

<body>	

	<div class="mainbutton">
	<ul>
  		<li><a href="home.html">HOME</a></li>
  		<li><a href="about.html" >ABOUT</a></li>
  		<li style="color: #000; background-color: #f8f9f9;">SIGN UP</li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>
	 

	<ul class="ul2">
  		<li>STEP 1</li>
  		<li>STEP 2</li>
  		<li>STEP 3</li>
  		<li>STEP 4</li>
	</ul>

	<div id="steps" >
	
		<form id="step1">
			<div class="container">
				<label id="sulbl"><b>Create Username:</b></label>
				<input type="text" placeholder="Username" name="username" required><br/><br/>

				<label id="sulbl"><b>Email Address:</b></label>
				<input type="email" placeholder="Email Address" name="email" required><br/><br/>

				<label id="sulbl"><b>Password:</b></label>
				<input type="password" placeholder="Password" name="password" required><br/><br/>

				<label id="sulbl"><b> Confirm Password:</b></label>
				<input type="password" placeholder="Confirm Password" name="password" required><br/><br/>
			
			</div>
		</form>

		<form id="step1">
			<div class="container">
				<label id="sulbl"><b>Full Name:</b></label>
				<input type="text" placeholder="Full Name" name="fullname" required><br/><br/>

				<label id="sulbl"><b>Address:</b></label>
				<input type="text" placeholder="Address" name="address" required><br/><br/>

				<label id="sulbl"><b>Age:</b></label><br/>
				<input type="radio" name="age" value="male" required> Male<br/>
				<input type="radio" name="age" value="female" required> Female<br/><br/>

				<label id="sulbl"><b>Birthday:</b></label>
				<input type="date" name="bdate" required><br/><br/>

				<label id="sulbl"><b>Mobile Number:</b></label>
				<input type="number" placeholder="Mobile Number" name="mobnum" required><br/><br/>

				<input type="submit" name="prev1" value="PREVIOUS"><br/><br/>
				<input type="submit" name="next2" value="NEXT"><br/><br/><br/>
			</div>
		</form>				

	</div>
</body>
</html>