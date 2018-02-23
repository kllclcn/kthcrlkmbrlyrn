<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<title>BUY / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designbuy.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
                      <ul>
  		<li><a href="http://localhost/buynsell/Users/usermain">ACCOUNT</a></li>
                                            <li style="color: #000; background-color: #E5E8E8;">BUY</li>
  		<li><a href="http://localhost/buynsell/Users/sell" >SELL</a></li>
  		<li><a href="http://localhost/buynsell/Users/transact" >TRANSACTIONS</a></li>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
    <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
    <div class="container" style="text-align: center;">
        <img src="<?php echo base_url(); ?>images/buy.png" style="margin-top: 20px;"><br><br><br>
             <label id="lbl"><b>Product Name:</b></label>
			<label id="lbl"><?php echo $prod_name; ?></label><br><br>
			<label id="lbl"><b>Category:</b></label>
			<label id="lbl"><?php echo $category; ?></label><br><br>
			<label id="lbl"><b>Price:</b></label>
			<label id="lbl"><?php echo $price; ?></label><br><br>
			<label id="lbl"><b>Product Description:</b></label>
			<label id="lbl"><?php echo $prod_desc; ?></label><br><br>
			<label id="lbl"><b>Meet up place:</b></label>
			<label id="lbl"><?php echo $place; ?></label><br><br>
			<label id="lbl"><b>Image:</b></label><br>
			<img id="pic" src="<?php echo $imageproduct; ?>" height="250" width="200"/><br><br>
			<label id="lbl"><b>Date Posted:</b></label>
			<label id="lbl"><?php echo $date_posted; ?></label><br><br>
			<label id="lbl"><b>Status:</b></label>
			<label id="lbl"><?php echo $status; ?></label><br><br>
			
			<a  id="btb" href="http://localhost/buynsell/Users/Btrans/?id=<?php echo $id; ?>">Confirm Reservation?</a>
			
			
			
</div>
    

</body>
</html>


