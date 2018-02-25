<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
    
<head>
	<title>ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadmin.css">
</head>
    
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                    <div id="hdr"></div>
                      <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">ACCOUNT</li>
  		
  		<li id="us" class="hv">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="http://localhost/buynsell/Organizer/Users">Confirm New Users</a>
                                                    </div>
                                            <li id="pr" class="hv">PRODUCTS</li>
                                                <div class="prodcntnt">
                                                <a href="http://localhost/buynsell/Organizer/Prods">Confirm New Products</a>
												
                                                </div>    
  		<li class="hv"><a href="/buynsell/Organizer/LogOut" >Log Out</a></li>
	</ul>
	</div>
       <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
                      
    <div id="container">
        <img id="pic" src="<?php echo base_url(); ?>images/acdd.png"><br><br>
           <label id="lbl">Username:</label>
			<label id="lbl"><?php echo $username; ?></label><br><br>
            <label id="lbl">Full Name:</label>
            <label id="lbl"><?php echo $name; ?></label><br><br>
            <label id="lbl">Sex:</label>
            <label id="lbl"><?php echo $Gender; ?></label><br><br>
            <label id="lbl">Address:</label>
            <label id="lbl"><?php echo $address; ?></label><br><br>
            <label id="lbl">Birthday:</label>
            <label id="lbl"><?php echo $Birthday; ?></label><br><br>
            <label id="lbl">Mobile Number:</label>
            <label id="lbl"><?php echo $contact; ?></label><br><br>
            <label id="lbl">Email Address:</label>
			<label id="lbl"><?php echo $email; ?></label><br><br>
             <label id="lbl">Student Number:</label>
			<label id="lbl"><?php echo $id_no; ?></label><br><br>
            <label id="lbl">College:</label>
			<label id="lbl"><?php echo $college; ?></label><br><br>
            
             <label id="lbl">Year and Section:</label>
			 <label id="lbl"><?php echo $yearsec; ?></label><br><br><br><br><br><br>
			 
			 <button id="btb"><a href="http://localhost/buynsell/Organizer/Edit">Edit Details</a></button><br><br/><br/>
    </div>

</body>
<style>

#btb{
    background-color: #dc4343;
    padding: 13px 22px 13px 22px;
    border-radius: 10px;
    text-decoration: none;
    color: black;
    font: 17px "Trebuchet MS", sans-serif;
    margin-left: 300px;
	margin-top:-200px;	
    position:relative;
    
}
</style>
</html>