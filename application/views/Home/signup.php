<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>SIGN UP / PUP BUY AND SELL</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designsignupc.css">	
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">	
                      <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>
	<div class="mainbutton">
	<ul>
                                            <li style="margin-left:320px;"><a href="homes">HOME</a></li>
  		<li id="abt"><a href="about" >ABOUT</a></li>
                                            <div class="drpcntnt">
                                                <a href="homemission">Mission</a>
                                                <a href="homevision">Vision</a>
                                            </div>
  		<li style="color: #000; background-color: #f8f9f9;">SIGN UP</li>
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
		<input type="text" placeholder="Username" name="username" required style="margin-left: 120px;"><br/><br/>


                                              <label id="sulbl"><b>Password:</b></label><br>
		<input type="password" placeholder="Password" name="password" required style="margin-left: 120px;"><br/><br/>

                                            <label id="sulbl"><b> Confirm Password:</b></label><br>
		<input type="password" placeholder="Confirm Password" name="Cpassword" required style="margin-left: 120px;"><br/><br/>
                                    </div>
                                <div id="brdr2">
                                        <span class="dot" style="margin-left:250px;"></span>
                                        <span class="dots"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg2.png" alt="Background" style='margin-left:90px;'/><br/><br/><br><br>
                                    
                                            <label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" required style="margin-left:120px;"><br/><br/>
                
                                            <label id="sulbl"><b>Sex:</b></label><br/>
		<input  id= "sulbl" type="radio" name="gender" value="male" required style="margin-left:120px;"> Male<br/>
		<input id="sulbl" type="radio" name="gender" value="female" required style="margin-left:120px;"> Female<br/><br/>
                
                                            <label id="sulbl"><b>Address:</b></label><br>
		<input type="text" name="address" required style="margin-left:120px;"><br/><br/>

                                            <label id="sulbl"><b>Birthday:</b></label><br>
		<input type="date" name="bdate" required style="margin-left:120px;"><br/><br/>

                                            <label id="sulbl"><b>Mobile Number:</b></label><br>
		<input type="number" placeholder="MobileNumber" name="mobnum" required style="margin-left:120px;"><br/><br/>
                
                                             <label id="sulbl"><b>Email Address:</b></label><br>
		<input type="email" placeholder="Email Address" name="email" required style="margin-left:120px;"><br/><br/>

                                            </div>
                                   
                                <div id="brdr3">
                                  <h2 class="ul2">STEP 3 -</h2><h2 class="ul3"> Educational Background</h2><br/><br/>
                                    
                                            <label id="sulbl"><b>College:</b></label>
                                            <select id="course" name="drop">
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
                                            </select>
                
                                            <label id="sulbl"><b>Year and Section:</b></label>
		<input type="text" placeholder="Year and Section" name="yrsec" required><br/><br/>

                                            </div>
                                            
                                    <div id="brdr4">
                                  <h2 class="ul2">STEP 4 -</h2><h2 class="ul3"> Security Questions</h2><br/><br/>
                                    
                                            
                                            </div>
                                    <input id="nextbtn" type="submit" name="next1" value="NEXT" onclick="myFunction1()">
                                     <input id="nextbtn1" type="submit" name="next3" value="NEXT" onclick="myFunction2()" style="display:none">
                                    <input id="submitbtn" type="submit" name="next2" value="SUBMIT" style="display:none;"><br/><br/><br/>
                                            </div><br/>
                                 </div>
    
                                  
                      </form>				
</div>
</body>
<script>
        function myFunction1() {
                    if (document.getElementById('brdr1')) {

                        if (document.getElementById('brdr1').style.display === 'none') {
                            document.getElementById('brdr1').style.display = 'block';
                            document.getElementById('brdr2').style.display = 'none';
                        }
                        else {
                            document.getElementById('brdr1').style.display = 'none';
                            document.getElementById('brdr2').style.display = 'block';
                            document.getElementById('nextbtn').style.display = 'none';
                            document.getElementById('nextbtn1').style.display = 'block';
                        }
                    }
        }
         function myFunction2() {
                    if (document.getElementById('brdr2')) {

                        if (document.getElementById('brdr2').style.display === 'none') {
                            document.getElementById('brdr2').style.display = 'block';
                            document.getElementById('brdr3').style.display = 'none';
                        }
                        else {
                            document.getElementById('brdr2').style.display = 'none';
                            document.getElementById('brdr3').style.display = 'block';
                        }
                    }
        }
</script>
</html>