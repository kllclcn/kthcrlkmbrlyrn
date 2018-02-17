<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designmainpp.css">	
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">ACCOUNT</li>
  		<li><a href="http://localhost/buynsell/Users/buy" >BUY</a></li>
  		<li><a href="http://localhost/buynsell/Users/sell" >SELL</a></li>
  		<li><a href="http://localhost/buynsell/Users/transact" >TRANSACTIONS</a></li>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
        <div class="layy">
            <img id="picc" src="<?php echo base_url(); ?>images/woman.png"<br>
                        <?php $name=($_SESSION['user_id'])?>
                        <p> hello <?php echo"$name";?></p>
        </div>
         </div>
        <div class="contt"></div>

        <div class="mainn">
            <img src="<?php echo base_url(); ?>images/acd.png" alt="Background" id="title"/><br><br><br>
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
             <label id="lbl">Year and Section:</label><br><br><br><br><br><br>
</body>
</html>