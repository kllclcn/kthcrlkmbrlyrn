<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>SELL / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designsell.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
                      <ul>
  		<li><a href="usermain" >ACCOUNT</a></li>
  		<li><a href="buy" >BUY</a></li>
                                            <li style="color: #000; background-color: #E5E8E8;">SELL</li>
  		<li><a href="transact" >TRANSACTIONS</a></li>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
    <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
<form method="post">
    <div id="container">
        <img src="<?php echo base_url(); ?>images/sell.png" style="margin-left:370px;"><br><br><br>
        <br/><b id="lbl">What are you selling?</b>
		<input type="text" name="stitle" required style="margin-left: 60px;"><br/><br/>
		<b id="lbl">Category:</b>
		<select name="category" style="margin-left: 160px;">
			<option value="Mobile Phones / Tablets">Mobile Phones / Tablets</option>
			<option value="Computers">Computers</option>
			<option value="Consumer Electronics">Consumer Electronics</option>
			<option value="Pets / Animals">Pets / Animals</option>
			<option value="Home / Furniture">Home / Furniture</option>
			<option value="Beauty / Health / Grocery">Beauty / Health / Grocery</option>
			<option value="Clothes / Accessories">Clothes / Accessories</option>
			<option value="Books / Sports / Hobbies">Books / Sports / Hobbies</option>
		</select><br/><br/>
		<b id="lbl">Price:</b>
		<input type="text" name="nprice" required style="margin-left: 193px;"><br/><br/>
		<b id="lbl">Description:</b><br/><br/>
		<textarea id="lbl" name= "desc" rows="4" cols="35" style="margin-left: 350px;">
		</textarea><br/><br/>
		<b id="lbl">Meetup Place:</b>
                                            <select name="nplace" style="margin-left: 120px;">
                                                <option value="Lagoon">Lagoon</option>
                                                <option value="Freedom Park">Freedom Park</option>
                                                <option value="Chapel">Chapel</option>
                                                <option value="Open Court">Open Court</option>
                                                <option value="Oval">Oval</option>
                                                <option value="Sampaguita">Sampaguita</option>
                                            </select><br/><br/>
                                            <b id="lbl">Product Image:</b>
                                            <input type="file" name="pic" accept="image/*" id="fileToUpload" style="margin-left: 110px;"><br/></br>
                                            
		<input id="sbmt" type="submit" name="sbmt" value="SELL ITEM" onclick="alert('Your item is on process!')"><br/>
	</div>
	</form>
</body>
</html>