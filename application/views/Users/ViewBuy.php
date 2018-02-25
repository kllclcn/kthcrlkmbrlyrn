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
        <li><a href="http://localhost/buynsell/Users/buy" >BUY</a></li>
  		<li><a href="http://localhost/buynsell/Users/sell" >SELL</a></li>
  		<li id="ad" class="hv" style="color: #000; background-color: #E5E8E8;"> TRANSACTIONS </li>
			<div class="admncntnt">
			<a href="http://localhost/buynsell/Users/transact" >Confirm Transaction</a>
			
			<a href="http://localhost/buynsell/Users/transell" > Sell History </a>
			<a href="http://localhost/buynsell/Users/tranbuy" > Buy History </a>
				
			</div>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
    <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
     <div class="container" style="text-align: center;">
			<br><br>
			<h1> ITEM BOUGHT </h1>
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
			<label id="lbl"><b>Meet up time:</b></label>
			<label id="lbl"><?php echo $time; ?></label><br><br>
			<label id="lbl"><b>Image:</b></label><br>
			<img id="pic" src="<?php echo $imageproduct; ?>" height="250" width="200"/><br><br>
			<label id="lbl"><b>Date Posted:</b></label>
			<label id="lbl"><?php echo $date_posted; ?></label><br><br>
			<label id="lbl"><b>Status:</b></label>
			<label id="lbl"><?php echo $status; ?></label><br><br>
			<label id="lbl"><b>Seller ID:</b></label>
			<label id="lbl"><?php echo $user_id; ?></label><br><br>
			<label id="lbl"><b>Date Purchased:</b></label>
			<label id="lbl"><?php echo $date_of_purchase; ?></label><br><br>
			
			
			<button id="btb"><a href="http://localhost/buynsell/Users/tranbuy">Back to Buy History</a></button><br><br/><br/>
		
			
			
</div>
    

</body>

<style>

#btb{
    background-color: #dc4343;
    padding: 13px 22px 13px 22px;
    border-radius: 10px;
    text-decoration: none;
    color: black;
    font: 17px "Trebuchet MS", sans-serif;
    margin-left: 300px;
	margin-top:-200px;	
    position:relative;
    
}

.mainbutton li{
	display: inline-block;
	padding: 25px 25px 25px 25px;
                       margin-right:40px;
}

.hv, .hv a{
	text-decoration: none;
	color: #000;
}

.mainbutton li:hover{
	background-color: #dc4343;
}

.admncntnt{
    font: 17px "Gill Sans MT",sans-serif;
    display: none;
    position: absolute;
    right:150px;
    background-color:#E5E8E8;
    width: 140px;
    z-index: 1;
}

.admncntnt a{
    text-align: center;
    display:none;
    color: black;
    padding: 6px 5px;
    text-decoration: none;
    display: block;
}

#ad:hover ~ .admncntnt, .admncntnt:hover{
    display: block;
}

.admncntnt a:hover{
    background-color: #f1f1f1;
}


</style>
</html>


