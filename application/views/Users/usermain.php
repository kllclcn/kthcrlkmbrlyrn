<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designmainx.css">	
</head>
<body  style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:480px;'/>
    <div class="layy">
        <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br><br><br><br>
                <div class="layyy">
                 <li id="click">ACCOUNT</li><br>
                <li><a href="http://localhost/buynsell/Users/buy" >BUY</a></li><br>
                <li><a href="http://localhost/buynsell/Users/sell" >SELL</a></li>
                <li><a href="http://localhost/buynsell/Users/transact">TRANSACTION</a></li></div>
        <div class="mainn">
            <img src="<?php echo base_url(); ?>images/acd.png" alt="Background" style='margin-left:350px;'/><br><br><br>
            <label id="lbl">Username:</label><br><br>
			
            <label id="lbl">Full Name:</label><br><br>
			<input type="text" placeholder="full name" name="full name" value="<?php echo $name; ?>" disabled><br/><br/>
            <label id="lbl">Sex:</label><br><br>
			<input type="text" placeholder="sex" name="sex" value="<?php echo $Gender; ?>" disabled><br/><br/>
            <label id="lbl">Address:</label><br><br>
			<input type="text" placeholder="address" name="address" value="<?php echo $address; ?>" disabled><br/><br/>
            <label id="lbl">Birthday:</label><br><br>
			<input type="text" placeholder="birthday" name="birthday" value="<?php echo $Birthday; ?>" disabled><br/><br/>
            <label id="lbl">Mobile Number:</label><br><br>
			<input type="text" placeholder="mobile number" name="mobile number" value="<?php echo $contact; ?>" disabled><br/><br/>
            <label id="lbl">Email Address:</label><br><br>
			<input type="text" placeholder="email address" name="email address" value="<?php echo $email; ?>" disabled><br/><br/>
             <label id="lbl">Student Number:</label><br><br>
			
            <label id="lbl">College:</label><br><br>
			
             <label id="lbl">Department:</label><br><br>
             <label id="lbl">Year and Section:</label><br><br>
        </div>
</body>
</html>