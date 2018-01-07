<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<style>
body{
background-color: #dc4343;
}
</style>

<head>
	<title>LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/designsell.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
	
</head>

<body>	
   <div class="layy">
                <li><a href="usermain">ACCOUNT</a></li>
                <li><a href="buy" >BUY</a></li>
                <li style="color: #000; background-color: #f8f9f9;">SELL</li>
    </div>
    <div class="acc">
		<label>What are you selling?</label><br/><br/>
		<input type="text" name="stitle" required><br/><br/>
		<label>Category</label><br/><br/>
		<select name="category">
			<option value="oc1">Mobile Phones / Tablets</option>
			<option value="oc2">Computers</option>
			<option value="oc3">Consumer Electronics</option>
			<option value="oc4">Pets / Animals</option>
			<option value="oc5">Home / Furniture</option>
			<option value="oc6">Beauty / Health / Grocery</option>
			<option value="oc7">Clothes / Accessories</option>
			<option value="oc8">Books / Sports / Hobbies</option>
		</select><br/><br/>
		<label>Price</label><br/><br/>
		<input type="text" name="nprice" required><br/><br/>
		<label>Description</label><br/><br/>
		<textarea rows="4" cols="50">
		</textarea><br/><br/>
		<label>Meetup Place</label>
		<input type="text" name="nplace" required><br/><br/>
                                            <label>Product Image</label>
                                            <input type="file" name="pic" accept="image/*" id="fileToUpload">
		<input type="submit" name="sbmt" value="SELL ITEM" onclick="alert('Item is posted!')"><br/>

	</div>
</body>
</html>