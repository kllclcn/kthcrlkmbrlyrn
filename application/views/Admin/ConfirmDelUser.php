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
  		<li id="us" style="color: #000; background-color: #E5E8E8;">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="Users">Confirm New Users</a>
                                                    <a href="DelUsers">Delete User</a></div>
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
	 
	<h1>Confirm Delete User</h1>
	
	<form method="post">
			<label id="lbl">User ID:</label>
            <label id="lbl"><?php echo $id; ?></label><br><br>
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
	
	
	<button id="btb"><a href="http://localhost/buynsell/Admin/DeleteUser/?id=<?php echo $id; ?>'">Delete User</a></button><br><br/><br/>
	</form>
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
    margin-left: 420px;
    position:relative;
    
}
</style>
</html>	