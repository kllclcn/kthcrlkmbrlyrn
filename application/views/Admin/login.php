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
	<title>ADMIN LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/logindesign.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
	
	
</head>

<body>	

<div class="mainbutton">
	
	</div>
	
<img src="<?php echo base_url(); ?>images/libg.png" alt="Background" style='width: 100%;'/>

<div id="container">
	
	
	<form method="post">

		<div class="container">
		<label id="lbl1"><b>Enter Username:</b></label>
		<input type="text" placeholder="Username" name="username" required>

		<label id="lbl2"><b>Enter Password:</b></label>
		<input type="password" placeholder="Password" name="password" required><br/><br/>
			
		<input type="submit" name="login" value="LOGIN"><br/>

	</form>
	
	
	
	
</div>


</body>
</html>