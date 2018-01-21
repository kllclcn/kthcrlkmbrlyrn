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
	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminusersx.css">	
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>
    
<div class="layy">
                   <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br>
	<div class="layyy">
              		<li><a href="admin">ACCOUNT</a></li><br/>
                                            <li><a href="users">CONFIRM NEW USERS</a></li><br/>
                                            <li id="click">CONFIRM NEW PRODUCTS</li><br/>
                                            <li><a href="Add">ADD ADMIN</a></li><br/>
                                            <li><a href="viewad">VIEW ADMINS</a></li><br/>
                                            <li><a href="delad">DELETE ADMINS</a></li>	
	</div>
</div>
    
        <div id="container">
            <img id="pic" src="<?php echo base_url(); ?>images/ad2.png"><br><br>
	<table border="1" style="border-color: #000; border-collapse:collapse;">
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
        </table><br/><br/><br/></div>
        </body>
</html>