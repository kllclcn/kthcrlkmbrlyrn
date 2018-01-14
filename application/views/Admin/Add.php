<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    	<title>ADD ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadd.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
</head>
<body>
    <div class="layy">
        <h> Welcome Admin! </h>
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