<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    	<title>ADD ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminaddx.css">
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>
    
    <div class="layy">
                           <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br>
	<div class="layyy">
                                            <li><a href="admin">ACCOUNT</a></li><br/>
  		<li><a href="users">CONFIRM NEW USERS</a></li><br/>
                                            <li><a href="prods">CONFIRM NEW PRODUCTS</a></li><br/>
                                             <li id="click">ADD ADMIN</li><br/>
                                            <li><a href="viewad">VIEW ADMINS</a></li><br/>
                                            <li><a href="delad">DELETE ADMINS</a></li>	
	</div>
    </div> 

<div id="container">
                 
                      <h2 style="margin-left: 20px;">Add another Administrator:</h2><br/>
	<form method="post">
                      <label id="sulbl"><b>Create Admin Username:</b></label>
	<input type="text" placeholder="Username" name="username" style="margin-left: 10px" required><br/><br/>
                       <label id="sulbl"><b>Create Password:</b></label>
	<input type="password" placeholder="Password" name="password" style="margin-left: 65px; " required><br/><br/>
                        <label id="sulbl"><b>Confirm Password:</b></label>
                        <input type="password" placeholder="Password" name="Cpassword" style="margin-left: 65px; " required><br/><br/><br/><br/><br/>
	<input class="addbutton" type="submit" name="submit" value="Submit"><br/><br/><br/><br/>
                      <button class ="bbtn"><a href="/buynsell/Admin/Admin">Back to Admin Menu</a></button>
	</form>
</div>

</body>
</html>