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
	<title>SELL / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designsell.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
	
</head>

<body>	
   <div class="layy">
                <li><a href="usermain">ACCOUNT</a></li>
                <li><a href="buy" >BUY</a></li>
                <li style="color: #000; background-color: #f8f9f9;">SELL</li>
    </div>
        <div class="lgt">
        <button class="lg"><a href="/buynsell/home/homes">LOGOUT</a></button>
    </div>
	<form method="post">
    <div id="container">
                                            <h2 style="font-family: Trebuchet MS; margin-left: 15px;"> SELL ITEM </h2>
                                            <br/><b style="margin-left: 30px;">What are you selling?</b>
		<input type="text" name="stitle" required style="margin-left: 30px;"><br/><br/>
		<b style="margin-left: 30px;">Category:</b>
		<select name="category" style="margin-left: 120px;">
			<option value="Mobile Phones / Tablets">Mobile Phones / Tablets</option>
			<option value="Computers">Computers</option>
			<option value="Consumer Electronics">Consumer Electronics</option>
			<option value="Pets / Animals">Pets / Animals</option>
			<option value="Home / Furniture">Home / Furniture</option>
			<option value="Beauty / Health / Grocery">Beauty / Health / Grocery</option>
			<option value="Clothes / Accessories">Clothes / Accessories</option>
			<option value="Books / Sports / Hobbies">Books / Sports / Hobbies</option>
		</select><br/><br/>
		<b style="margin-left: 30px;">Price:</b>
		<input type="text" name="nprice" required style="margin-left: 150px;"><br/><br/>
		<b style="margin-left: 30px;">Description:</b><br/><br/>
		<textarea style="margin-left: 30px;" name= "desc" rows="4" cols="50">
		</textarea><br/><br/>
		<b style="margin-left: 30px;">Meetup Place:</b>
		<input type="text" name="nplace" required style="margin-left: 80px;"><br/><br/>
                                            <b style="margin-left: 30px;">Product Image:</b>
                                            <input type="file" name="pic" accept="image/*" id="fileToUpload" style="margin-left: 70px;"><br/></br>
		<input id="sbmt" type="submit" name="sbmt" value="SELL ITEM" onclick="alert('Your item is on process!')"><br/>

	</div>
	</form>
</body>
</html>