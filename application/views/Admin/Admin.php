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
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadminz.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
</head>
<body>

    <div class="mainbutton">
    <li>WELCOME ADMIN!</li>
	</div>
    
        <div class="lgt">
        <button class="lg"><a href="/buynsell/Admin/login">LOGOUT</a></button>
    </div>
    
<div id="container">
                    <h3>Choose Transaction:</h3>
	<ul>
  		<li><a href="users">CONFIRM NEW USERS</a></li><br/>
                                            <li><a href="prods">CONFIRM NEW PRODUCTS</a></li><br/>
                                            <li><a href="Add">ADD ADMIN</a></li><br/>
                                            <li><a href="viewad">VIEW ADMINS</a></li><br/>
                                            <li><a href="delad">DELETE ADMINS</a></li>
  		
	</ul><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

</body>
</html>