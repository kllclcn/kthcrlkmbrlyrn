<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>SIGN UP / PUP BUY AND SELL</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designsignupxx.css">	
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                      <div id="hdr"></div>
                       <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
                                            <li><a href="homes" >HOME</a></li>
  		<li id="abt"><a href="about" >ABOUT</a></li>
                                            <div class="drpcntnt">
                                                <a href="aboutbns">About</a>
                                                <a href="aboutdev">Developers</a>
                                                <a href="homemission">Mission</a>
                                                <a href="homevision">Vision</a>
                                                <a href="contact">Contact Us</a>
                                            </div>
                		<li style="color: #000; background-color: #E5E8E8;">SIGN UP</li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>
<div class="mainn">	 
	<form method="post">
                                <div class="container">
                                    
                                    <div id="brdr1">
                                        <span class="dots" style="margin-left:250px;"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg1.png" alt="Background" style='margin-left:130px;'/><br/><br/><br><br>
                                        <label id="sulbl"><b>Create Username:</b></label><br>
		<input type="text" placeholder="Username" name="username" style="margin-left: 120px;" required><br/><br/>


                                              <label id="sulbl"><b>Password:</b></label><br>
		<input type="password" placeholder="Password" name="password" style="margin-left: 120px;" required><br/><br/>

                                            <label id="sulbl"><b> Confirm Password:</b></label><br>
		<input type="password" placeholder="Confirm Password" name="Cpassword" style="margin-left: 120px;" required><br/><br/>
                                    </div>
                                <div id="brdr2">
                                        <span class="dot" style="margin-left:250px;"></span>
                                        <span class="dots"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg2.png" alt="Background" style='margin-left:90px;'/><br/><br/><br><br>
                                    
                                            <label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" style="margin-left:120px;" required><br/><br/>
                
                                            <label id="sulbl"><b>Sex:</b></label><br/>
		<input  id= "sulbl" type="radio" name="gender" value="male" style="margin-left:120px;" required> Male<br/>
		<input id="sulbl" type="radio" name="gender" value="female" style="margin-left:120px;" required> Female<br/><br/>
                
                                            <label id="sulbl"><b>Address:</b></label><br>
		<input type="text" name="address" style="margin-left:120px;" required><br/><br/>

                                            <label id="sulbl"><b>Birthday:</b></label><br>
		<input type="date" name="bdate" style="margin-left:120px;" required><br/><br/>

                                            <label id="sulbl"><b>Mobile Number:</b></label><br>
		<input type="text" placeholder="MobileNumber" name="mobnum" style="margin-left:120px;" required><br/><br/>
                
                                             <label id="sulbl"><b>Email Address:</b></label><br>
		<input type="email" placeholder="Email Address" name="email" style="margin-left:120px;" required><br/><br/>

                                            </div>
                                   
                                <div id="brdr3">
                                  <span class="dot" style="margin-left:250px;"></span>
                                        <span class="dot"></span>
                                        <span class="dots"></span>
                                        <span class="dot"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg3.png" alt="Background" style='margin-left:90px;'/><br/><br/><br><br>
                                        <label id="sulbl"><b>Student Number:</b></label><br>
                                        <input type="text" placeholder="201X-XXXXX-XX-X" name="studno" style="margin-left:120px;" required><br/><br/>
                                        <label id="sulbl"><b>College:</b></label><br>
                                            <select id="course" name="drop" style="margin-left:120px;">
			<option value="crs1">College of Accountancy and Finance (CAF)</option>
			<option value="crs2">College of Architecture and Fine Arts (CAFA)</option>
			<option value="crs3">College of Arts and Letters (CAL)</option>
			<option value="crs4">College of Business Administration (CBA)</option>
			<option value="crs5">College of Communication (COC)</option>
			<option value="crs6">College of Computer and Information Sciences (CCIS)</option>
			<option value="crs7">College of Education (COED)</option>
			<option value="crs8">College of Engineering (CE)</option>
                                                                  <option value="crs9">College of Human Kinetics (CHK)</option>
			<option value="crs10">College of Political Science and Public Administration (CPSPA)</option>
			<option value="crs11">College of Social Sciences and Development (CSSD)</option>
			<option value="crs12">College of Science (CS)</option>
                                                                  <option value="crs13">College of Tourism, Hospitality and Transportation Management(CTHTM))</option>
			<option value="crs14">Institute of Technology (ITECH)</option>
		</select><br/><br/>
                                            <label id="sulbl"><b>Department:</b></label>
                                            <select id="dept1" name="term">
                                                <option value="da1">Bachelor of Science in Accountancy (BSA)</option>
                                                <option value="da2">Bachelor in Banking and Finance</option>
                                            </select><br/><br/>
                                            <select id="dept2" name="term">
                                                <option value="db1">Bachelor of Science in Acrchitecture (BS ARCH)</option>
                                                <option value="db2">Bachelor of Science in Interior Design (BSID)</option>
                                            </select><br>
                
                                            <label id="sulbl"><b>Year and Section:</b></label><br>
		<input type="text" placeholder="Year and Section" name="yrsec" style="margin-left:120px;" required><br/><br/>

                                            </div>
                                            
                                    <div id="brdr4">
                                   <span class="dot" style="margin-left:250px;"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dots"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg4.png" alt="Background" style='margin-left:90px;'/><br/><br/><br><br>
                                    
                                            
                                            </div>
                                    <input id="submitbtn" type="submit" name="next2" value="SUBMIT"><br/><br/><br/>
                                            </div><br/>
                                 </div>
    
                                  
                      </form>				
</div>
</body>
</html>