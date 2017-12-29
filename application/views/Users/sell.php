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
	<img src="<?php echo base_url(); ?>images/main.png" alt="Background" style='width: 100%;'/>
	
	
</head>

<body>	
    <div class="acc">
		<h1>Sell Item</h1>
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
			<!--<option value="o9">Baby Stuff / Toys</option>
			<option value="o10">Real Estate</option>
			<option value="o11">Cars / Automotives</option>
			<option value="o12">Motorcycles / Scooters</option>
			<option value="o13">Services</option>
			<option value="o14">Jobs</option>
			<option value="o15">Business / Earning Opportunities</option>-->
		</select><br/><br/>
		<label>Price</label><br/><br/>
		<input type="text" name="nprice" required><br/><br/>
		<label>Description</label><br/><br/>
		<textarea rows="4" cols="50">
		</textarea><br/><br/>
		<label>Meetup Place</label>
		<input type="text" name="nplace" required><br/><br/>
		<input type="submit" name="sbmt" value="SELL ITEM" onclick="alert('Item is posted!')"><br/>

	</div>
</body>
</html>