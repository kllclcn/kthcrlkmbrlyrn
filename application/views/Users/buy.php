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
	<title>BUY / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/designbuyy.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
	
</head>
<body>

   <div class="layy">
                <li><a href="usermain">ACCOUNT</a></li>
                <li style="color: #000; background-color: #f8f9f9;">BUY</li>
                 <li><a href="sell" >SELL</a></li>
    </div>
    
    <div class="lgt">
        <button class="lg"><a href="/buynsell/home/homes">LOGOUT</a></button>
    </div>
    
<div class="container">
	<h1>Welcome Buyer!</h1>
	<table border="2" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Category</th>
		<th>Price</th>
		<th>Product Description</th>
		<th>Meet up Place</th>
		<th>Date Posted</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
        </table><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>


