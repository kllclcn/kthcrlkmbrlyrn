<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>CONFIRM PRODUCTS</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminuser.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>

</head>
<body>

<div id="container">
	<h1>Confirm Product</h1>
	<b>Hi Admin</b>
	<form method="post">
	<input type="number" placeholder="Prod ID" name="prod_id" value="<?php echo $prod_id; ?>" disabled><br/>
	<input type="text" placeholder="Prod Name" name="prod_name" value=" <?php echo $prod_name; ?>" disabled><br/>
	<input type="text" placeholder="Category" name="category" value="<?php echo $category; ?>" disabled><br/>
	<input type="text" placeholder="Price" name="price" value="<?php echo $price; ?>" disabled><br/>
	<input type="text" placeholder="Product Description" name="prod_desc" value="<?php echo $prod_desc; ?>" disabled><br/>
	<input type="text" placeholder="Place" name="place" value="<?php echo $place; ?>" disabled><br/>
	<input type="text" placeholder="Date Posted" name="date_posted" value="<?php echo $date_posted; ?>" disabled><br/>
	
	
	<input type="submit" name="Confirm" value="Confirm">
	</form>
</div>

</body>
</html>