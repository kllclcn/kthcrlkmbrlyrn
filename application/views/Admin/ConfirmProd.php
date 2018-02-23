<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
    
<head>
	<title>ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminaddz.css">
</head>
    
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                    <div id="hdr"></div>
                      <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
                                            <li class="hv"><a href="Admin">ACCOUNT</a></li>
                                            
  		<li id="us" class="hv">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="Users">Confirm New Users</a>
                                                    <a href="delus">Delete User</a></div>
                                            <li id="pr" style="color: #000; background-color: #E5E8E8;">PRODUCTS</li>
                                                <div class="prodcntnt">
                                                <a href="Prods">Confirm New Products</a>
                                                </div>    
  		<li class="hv"><a href="/buynsell/Admin/LogOut" >Log Out</a></li>
	</ul>
	</div>
       <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
                      
        <div id="container">
	<h1>Confirm Product</h1>
	<form method="post">
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
	
	<input id="btb" type="submit" name="Confirm" value="Confirm"><br/><br/><br/><br/><br/><br/>
	</form>
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
</style>
</html>