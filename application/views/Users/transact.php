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
        
        <table id="tble" style="margin-top: 30px;">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Date Posted</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
        <tr><?php
			echo $list;
        ?><tr></table>
</div>
    

</body>
</html>


