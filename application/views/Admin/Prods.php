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
                                            <li id="ad" class="hv">ORGANIZERS</li>
                                            <div class="admncntnt">
                                                <a href="viewad">View Organizers</a>
                                                <a href="add">Add Organizer</a>
                                                <a href="delad">Delete Organizer</a>
                                            </div>
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