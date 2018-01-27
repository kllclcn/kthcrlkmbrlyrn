<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<title>BUY / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designbuyc.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
                      <ul>
  		<li><a href="usermain" >ACCOUNT</a></li>
        <li><a href="buy" >BUY</li>
  		<li><a href="sell" >SELL</a></li>
  		<li style="color: #000; background-color: #E5E8E8;">TRANSACTIONS</a></li>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
    <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
    <div class="container">
        
    <h1>Confirm Transaction</h1>
	<b>Hello Seller! Is this transaction already completed?</b><br/><br/>
	<form method="post">
                      <label style="margin-left:50px;">Product ID:</label>
	<input type="number" placeholder="Prod ID" style="margin-left:100px;" accept=""name="prod_id" value="<?php echo $prod_id; ?>" disabled><br/><br/>
                       <label style="margin-left:50px;">Product Name:</label>
	<input type="text" placeholder="Prod Name" style="margin-left:73px;" name="prod_name" value=" <?php echo $prod_name; ?>" disabled><br/><br/>
                       <label style="margin-left:50px;">Category:</label>
	<input type="text" placeholder="Category" style="margin-left:110px;" name="category" value="<?php echo $category; ?>" disabled><br/><br/>
                      <label style="margin-left:50px;">Price:</label>
	<input type="text" placeholder="Price" style="margin-left:139px;" name="price" value="<?php echo $price; ?>" disabled><br/><br/>
                      <label style="margin-left:50px;">Product Desciption:</label>
	<input type="text" placeholder="Product Description" style="margin-left:41px;" name="prod_desc" value="<?php echo $prod_desc; ?>" disabled><br/><br/>
                      <label style="margin-left:50px;">Meetup Place:</label>
	<input type="text" placeholder="Place" style="margin-left:77px;" name="place" value="<?php echo $place; ?>" disabled><br/><br/>
                      <label style="margin-left:50px;">Date Posted:</label>
	<input type="text" placeholder="Date Posted" style="margin-left:87px;" name="date_posted" value="<?php echo $date_posted; ?>" disabled><br/><br/><br/><br/>
	
	
	<input class="bbtn" type="submit" name="Confirm" value="Confirm"><br/><br/><br/><br/><br/><br/>
	</form>
</div>
    

</body>
</html>

