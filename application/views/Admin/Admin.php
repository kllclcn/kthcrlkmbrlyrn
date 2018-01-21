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



	<title>ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadminx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>

    <div class="mainbutton">
	</div>
    
        <div class="lgt">
        <button class="lg"><a href="/buynsell/Admin/LogOut">LOGOUT</a></button>
    </div>
    
<div class="layy">
                   <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br>
	<div class="layyy">
                                            <li id="click">ACCOUNT</li><br/>
  		<li><a href="users">CONFIRM NEW USERS</a></li><br/>
                                            <li><a href="prods">CONFIRM NEW PRODUCTS</a></li><br/>
                                            <li><a href="Add">ADD ADMIN</a></li><br/>
                                            <li><a href="viewad">VIEW ADMINS</a></li><br/>
                                            <li><a href="delad">DELETE ADMINS</a></li>	
	</div>
</div>
    
    <div id="container">
        <img id="pic" src="<?php echo base_url(); ?>images/acdd.png"><br><br>
     </div

</body>
</html>