<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designmainp.css">	
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">ACCOUNT</li>
  		<li><a href="buy" >BUY</a></li>
  		<li><a href="sell" >SELL</a></li>
  		<li><a href="transact" >TRANSACTIONS</a></li>
                                            <li><a href="../Home/homes">LOG OUT</a></li>
	</ul>
	</div>
        <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
         </div>
        <div class="contt"></div>
        <div class="mainn">
            <img src="<?php echo base_url(); ?>images/acd.png" alt="Background" id="title"/><br><br><br>
            <label id="lbl">Username:</label><br><br>
            <label id="lbl">Full Name:</label><br><br>
            <label id="lbl">Sex:</label><br><br>
            <label id="lbl">Address:</label><br><br>
            <label id="lbl">Birthday:</label><br><br>
            <label id="lbl">Mobile Number:</label><br><br>
            <label id="lbl">Email Address:</label><br><br>
             <label id="lbl">Student Number:</label><br><br>
            <label id="lbl">College:</label><br><br>
             <label id="lbl">Department:</label><br><br>
             <label id="lbl">Year and Section:</label><br><br><br><br><br><br>
</body>
</html>