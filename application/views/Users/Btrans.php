<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
	<title>BUY / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/users/designbtransx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
    <div id="hdr"></div>
    <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
    	<div class="mainbutton">
                      <ul>
  		<li><a href="usermain" >ACCOUNT</a></li>
                                            <li style="color: #000; background-color: #E5E8E8;">BUY</li>
  		<li><a href="sell" >SELL</a></li>
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
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
    <div class="container">
        <br><br><br><h1 style="text-align: center;"> ITEM IS RESERVED!  </h1>
        
        <a  id="btb" href="http://localhost/buynsell/Users/buy">Back to buy</a>
   </div>
    

</body>
<style>
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