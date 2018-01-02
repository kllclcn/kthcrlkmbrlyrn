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
	<title> PUP Buy and Sell </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/designsignupz.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
	
</head>

<body>	

	<div class="mainbutton">
	<ul>
  		<li><a href="homes">HOME</a></li>
  		<li><a href="about" >ABOUT</a></li>
  		<li style="color: #000; background-color: #f8f9f9;">SIGN UP</li>
  		<li><a href="login" >LOG IN</a></li>
	</ul>
	</div>
<div class="mainn">	 
	
    <!--<form>
        <div class ="conntainer">
        <input type="submit" name="prev1" value="PREVIOUS"><br/><br/>
        </div>
    </form>-->
    
	<form method="post">
                                <div class="container">
                                    
                                    <div class="brdr">
                                        <h2 class="ul2">STEP 1 -</h2><h2 class="ul3"> Account Set Up</h2><br/><br/>
		<label id="sulbl"><b>Create Username:</b></label>
		<input type="text" placeholder="Username" name="username" required><br/><br/>


		<label id="sulbl"><b>Password:</b></label>
		<input type="password" placeholder="Password" name="password" required><br/><br/>

		<label id="sulbl"><b> Confirm Password:</b></label>
		<input type="password" placeholder="Confirm Password" name="Cpassword" required><br/><br/>
                                    </div><br/>
                                <div class="brdr">
                                  <h2 class="ul2">STEP 2 -</h2><h2 class="ul3"> Personal Information</h2><br/><br/>
                                    
                                            <label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" required><br/><br/>
                
                                            <label id="sulbl"><b>Gender:</b></label><br/>
		<input  id= "sulbl" type="radio" name="gender" value="male" required> Male<br/>
		<input id="sulbl" type="radio" name="gender" value="female" required> Female<br/><br/>
                
                                            <label id="sulbl"><b>Address:</b></label>
		<input type="text" name="address" required><br/><br/>

		<label id="sulbl"><b>Birthday:</b></label>
		<input type="date" name="bdate" required><br/><br/>

		<label id="sulbl"><b>Mobile Number:</b></label>
		<input type="number" placeholder="MobileNumber" name="mobnum" required><br/><br/>
                
                                            <label id="sulbl"><b>Email Address:</b></label>
		<input type="email" placeholder="Email Address" name="email" required><br/><br/>

                                            </div>
                                   
                                <div class="brdr">
                                  <h2 class="ul2">STEP 3 -</h2><h2 class="ul3"> Educational Background</h2><br/><br/>
                                    
                                            <label id="sulbl"><b>College:</b></label>
		<select name="course">
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
		<input type="text" placeholder="Department" name="dept" required><br/><br/>
                
                                            <label id="sulbl"><b>Year and Section:</b></label>
		<input type="text" placeholder="Year and Section" name="yrsec" required><br/><br/>

                                            </div>
                                            
                                    <div class="brdr">
                                  <h2 class="ul2">STEP 4 -</h2><h2 class="ul3"> Security Questions</h2><br/><br/>
                                    
                                            
                                            </div>
                                            <input id="submitbtn" type="submit" name="next2" value="NEXT"><br/><br/><br/>
                                            </div><br/>
                                 </div>
    
                                  
                      </form>				
</div>
</body>
</html>