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
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designbuyx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:480px;'/>
    <div class="layy">
        <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br><br><br><br>
                <div class="layyy">
                <li><a href="usermain">ACCOUNT</a></li><br>
                <li id="click">BUY</li><br>
                <li><a href="sell" >SELL</a></li><br>
                <li><a href="transact">TRANSACTION</a></li></div></div>
    <div class="container">
	<h1>Welcome Buyer!</h1>
	<table  id="brdr" border="1">
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


