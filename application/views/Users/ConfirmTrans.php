<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<title>BUY / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designbtransx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
                      <ul>
  		<li><a href="usermain" >ACCOUNT</a></li>
                                            <li style="color: #000; background-color: #E5E8E8;">BUY</li>
  		<li><a href="sell" >SELL</a></li>
  		<li><a href="transact" >TRANSACTIONS</a></li>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
    <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
    <div class="container" style="text-align: center;">
            <h1>Confirm Transaction</h1>
	<b>Hello Seller! Is this transaction already completed?</b><br/><br/>
	<form method="post">
                      <label id="lbl">Product Name:</label>
			<label id="lbl"><?php echo $prod_name; ?></label><br><br>
			<label id="lbl">Category:</label>
			<label id="lbl"><?php echo $category; ?></label><br><br>
			<label id="lbl">Price:</label>
			<label id="lbl"><?php echo $price; ?></label><br><br>
			<label id="lbl">Product Description:</label>
			<label id="lbl"><?php echo $prod_desc; ?></label><br><br>
			<label id="lbl">Meet up place:</label>
			<label id="lbl"><?php echo $place; ?></label><br><br>
			<label id="lbl">Image:</label><br>
			<img id="pic" src="<?php echo $imageproduct; ?>" height="250" width="200"/><br><br>
			<label id="lbl">Date Posted:</label>
			<label id="lbl"><?php echo $date_posted; ?></label><br><br>
			<label id="lbl">Status:</label>
			<label id="lbl"><?php echo $status; ?></label><br><br>
	
	<input class="bbtn" type="submit" name="Confirm" value="Confirm"onclick="alert('Your transaction is confirmed!')"><br/><br/><br/><br/><br/><br/>
	</form>
</div>
    

</body>
</html>


