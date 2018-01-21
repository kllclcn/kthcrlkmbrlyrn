<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>
	<title>ADMIN LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminloginx.css">
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>
<div class="mainbutton">
    <p>Admin Login</p>
	</div>
	
<img src="<?php echo base_url(); ?>images/logbg.png" alt="Background" style='width: 100%;'/>

<div id="container">
	
	
	<form method="post">

		<div class="container">
		<label id="lbl1"><b>Username:</b></label>
		<input type="text" name="username" required>

		<label id="lbl2"><b>Password:</b></label>
		<input type="password" name="password" required><br/><br/>
			
		<input class="loginbtn" type="submit" name="login" value="LOGIN"><br/>

	</form>
	
	
	
	
</div>


</body>
</html>