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
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
	
</head>

<body>	

	<div class="mainbutton">
	<ul>
  		<li><a href="homes">HOME</a></li>
  		<li><a href="about" >ABOUT</a></li>
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

	
    <form>
        <div class ="conntainer">
        <input type="submit" name="prev1" value="PREVIOUS"><br/><br/>
        </div>
    </form>
    
		<form method="post">
			<div class="container">
		<label id="sulbl"><b>Create Username:</b></label>
		<input type="text" placeholder="Username" name="username" required><br/><br/>


		<label id="sulbl"><b>Password:</b></label>
		<input type="password" placeholder="Password" name="password" required><br/><br/>

		<label id="sulbl"><b> Confirm Password:</b></label>
		<input type="password" placeholder="Confirm Password" name="Cpassword" required><br/><br/>
                                
                                            <label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" required><br/><br/>
                
                                            <label id="sulbl"><b>Gender:</b></label><br/>
		<input type="radio" name="gender" value="male" required> Male<br/>
		<input type="radio" name="gender" value="female" required> Female<br/><br/>
                
                                            <label id="sulbl"><b>Address:</b></label>
		<input type="text" name="address" required><br/><br/>

		<label id="sulbl"><b>Birthday:</b></label>
		<input type="date" name="bdate" required><br/><br/>

		<label id="sulbl"><b>Mobile Number:</b></label>
		<input type="number" placeholder="MobileNumber" name="mobnum" required><br/><br/>
                
                <label id="sulbl"><b>Email Address:</b></label>
		<input type="email" placeholder="Email Address" name="email" required><br/><br/>

		<input type="submit" name="next2" value="NEXT"><br/><br/><br/>
			</div>
		</form>				

</body>
</html>