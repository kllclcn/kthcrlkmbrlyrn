<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
    
<head>
	<title>ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadminp.css">
</head>
    
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                    <div id="hdr"></div>
                      <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">ACCOUNT</li>
  		<li id="ad" class="hv">ADMIN</li>
                                            <div class="admncntnt">
                                                <a href="aboutbns">View Admins</a>
                                                <a href="aboutdev">Add Admin</a>
                                                <a href="homemission">Delete Admin</a>
                                            </div>
  		<li id="us" class="hv">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="aboutbns">Confirm New Users</a>
                                                    <a href="aboutdev">Delete User</a></div>
                                            <li id="pr" class="hv">PRODUCTS</li>
                                                <div class="prodcntnt">
                                                <a href="aboutbns">Confirm New Products</a>
                                                </div>    
  		<li class="hv"><a href="home/homes" >Log Out</a></li>
	</ul>
	</div>
    
    <div id="container">
        <img id="pic" src="<?php echo base_url(); ?>images/acdd.png"><br><br>
        hello <?php echo"$_SESSION[id]"; ?>
     </div

</body>
</html>