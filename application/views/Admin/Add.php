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
                                            <li id="ad" style="color: #000; background-color: #E5E8E8;">ORGANIZERS</li>
                                            <div class="admncntnt">
                                                <a href="viewad">View Organizers</a>
                                                <a href="add">Add Organizer</a>
                                                <a href="delad">Delete Organizer</a>
                                            </div>
  		<li id="us" class="hv">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="Users">Confirm New Users</a>
                                                    <a href="delus">Delete User</a></div>
                                            <li id="pr" class="hv">PRODUCTS</li>
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
                       <img src="<?php echo base_url(); ?>images/addad.png" alt="Background" id="title"/><br><br><br>
	<form method="post">
                      <label id="sulbl"><b>Create Admin Username:</b></label>
	<input type="text" placeholder="Username" name="username" style="margin-left: 10px" required><br/><br/>
                       <label id="sulbl"><b>Create Password:</b></label>
	<input type="password" placeholder="Password" name="password" style="margin-left: 65px; " required><br/><br/>
                        <label id="sulbl"><b>Confirm Password:</b></label>
                        <input type="password" placeholder="Password" name="Cpassword" style="margin-left: 65px; " required><br/><br/><br/><br/><br/>
	<input class="addbutton" type="submit" name="submit" value="Submit"><br/><br/><br/><br/>
	</form>
    </div>

</body>
</html>