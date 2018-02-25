<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designmainpp.css">	
</head>

<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
	<ul>    
  		<li style="color: #000; background-color: #E5E8E8;">ACCOUNT</li>
  		<li><a href="http://localhost/buynsell/Users/buy" >BUY</a></li>
  		<li><a href="http://localhost/buynsell/Users/sell" >SELL</a></li>
		<li id="ad" class="hv"> TRANSACTIONS </li>
			<div class="admncntnt">
			<a href="http://localhost/buynsell/Users/transact" >Confirm Transaction</a>
			
			<a href="http://localhost/buynsell/Users/transell" > Sell History </a>
			<a href="http://localhost/buynsell/Users/tranbuy" > Buy History </a>
				
			</div>
        <li><a href="/buynsell/Users/LogOut">LOG OUT</a></li>
	</ul>
	</div>
        <div class="layy">
            <img id="picc" src="<?php echo base_url(); ?>images/woman.png"<br>
                        <p> hello <?php echo"$name";?></p>
        </div>
         </div>
        <div class="contt"></div>

        <div class="mainn">
            <img src="<?php echo base_url(); ?>images/acd.png" alt="Background" id="title"/><br><br><br>
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
			 
			  <button id="btb"><a href="http://localhost/buynsell/Users/Edit">Edit Details</a></button><br><br/><br/>
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
	margin-top: 10px;	
    position:relative;
    
}

.mainbutton li{
	display: inline-block;
	padding: 25px 25px 25px 25px;
                       margin-right:40px;
}

.hv, .hv a{
	text-decoration: none;
	color: #000;
}

.mainbutton li:hover{
	background-color: #dc4343;
}

.admncntnt{
    font: 17px "Gill Sans MT",sans-serif;
    display: none;
    position: absolute;
    right:150px;
    background-color:#E5E8E8;
    width: 140px;
    z-index: 1;
}

.admncntnt a{
    text-align: center;
    display:none;
    color: black;
    padding: 6px 5px;
    text-decoration: none;
    display: block;
}

#ad:hover ~ .admncntnt, .admncntnt:hover{
    display: block;
}

.admncntnt a:hover{
    background-color: #f1f1f1;
}


</style>
</html>