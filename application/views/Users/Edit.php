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
                                                    <a href="http://localhost/buynsell/Organizer/delus">Delete User</a></div>
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
    <form method="post">                
    <div id="container">
	
        <img id="pic" src="<?php echo base_url(); ?>images/acdd.png"><br><br>
           
		   
		<label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" style="margin-left:120px;" value="<?php echo $name; ?>" required><br/><br/>
                
        <label id="sulbl"><b>Sex:</b></label><br/>
		<input  id= "sulbl" type="radio" name="gender" value="male" style="margin-left:120px;" required> Male<br/>
		<input id="sulbl" type="radio" name="gender" value="female" style="margin-left:120px;" required> Female<br/><br/>
                
        <label id="sulbl"><b>Address:</b></label><br>
		<input type="text" name="address" style="margin-left:120px;" value="<?php echo $address; ?>" required><br/><br/>

       

        <label id="sulbl"><b>Mobile Number:</b></label><br>
		<input type="text" placeholder="MobileNumber" name="mobnum" style="margin-left:120px;"  required><br/><br/>
                
        <label id="sulbl"><b>Email Address:</b></label><br>
		<input type="email" placeholder="Email Address" name="email" style="margin-left:120px;" required><br/><br/>

                                
       
        <label id="sulbl"><b>Student Number:</b></label><br>
        <input type="text" placeholder="201X-XXXXX-XX-X" name="studno" style="margin-left:120px;" required><br/><br/>
        <label id="sulbl"><b>College:</b></label><br>
        <select id="course" name="college" style="margin-left:120px;">
			<option value="College of Accountancy and Finance (CAF)">College of Accountancy and Finance (CAF)</option>
			<option value="College of Architecture and Fine Arts (CAFA)">College of Architecture and Fine Arts (CAFA)</option>
			<option value="College of Arts and Letters (CAL)">College of Arts and Letters (CAL)</option>
			<option value="College of Business Administration (CBA)">College of Business Administration (CBA)</option>
			<option value="College of Communication (COC)">College of Communication (COC)</option>
			<option value="College of Computer and Information Sciences (CCIS)</">College of Computer and Information Sciences (CCIS)</option>
			<option value="College of Education (COED)">College of Education (COED)</option>
			<option value="College of Engineering (CE">College of Engineering (CE)</option>
            <option value="College of Human Kinetics (CHK)">College of Human Kinetics (CHK)</option>
			<option value="College of Political Science and Public Administration (CPSPA)">College of Political Science and Public Administration (CPSPA)</option>
			<option value="College of Social Sciences and Development (CSSD">College of Social Sciences and Development (CSSD)</option>
			<option value="College of Science (CS)">College of Science (CS)</option>
            <option value="College of Tourism, Hospitality and Transportation Management(CTHTM))">College of Tourism, Hospitality and Transportation Management(CTHTM))</option>
			<option value="Institute of Technology (ITECH)">Institute of Technology (ITECH)</option>
		</select><br/><br/>
                                           
                
                                            <label id="sulbl"><b>Year and Section:</b></label><br>
		<input type="text" placeholder="Year and Section" name="yrsec" style="margin-left:120px;" required><br/><br/>

                                           
		   
		   
		   
			 <input id="submitbtn" type="submit" name="next2" value="SUBMIT">
			 <button id="btb"><a href="http://localhost/buynsell/Users/usermain">Back to Account Details</a></button><br><br/><br/>
    </div>
	</form>	

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
#submitbtn{
    background-color: #dc4343;
    padding: 13px 22px 13px 22px;
    border-radius: 10px;
    text-decoration: none;
    color: black;
    font: 17px "Trebuchet MS", sans-serif;
    margin-left: 200px;
	margin-top: 20px;	
    position:relative;
    
}

</style>
</html>