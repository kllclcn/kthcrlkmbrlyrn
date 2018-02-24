<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<title>SIGN UP / PUP BUY AND SELL</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designsignupxx.css">	
	
<script>
function first() {
    var x = document.getElementById("pres");
    x.value = x.value.toLowerCase();
}
function second() {
    
	var k = document.getElementById("found");
    k.value = k.value.toLowerCase();
}

</script>
</head>
<body onLoad="ChangeCaptcha()" style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
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

                                            </div>
                                            
                                    <div id="brdr4">
                                   <span class="dot" style="margin-left:250px;"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dots"></span><br><br>
                                        <img src="<?php echo base_url(); ?>images/pg4.png" alt="Background" style='margin-left:90px;'/><br/><br/><br><br>
										<label id="sulbl"><b>Who is the president of PUP?</b></label><br>
										<input type="text" placeholder="name of president" id="pres" name="pres"  onkeyup="first()" style="margin-left:120px;" required><br/><br/>
                                         <label id="sulbl"><b>Who is the founder of FEWA?</b></label><br>
										<input type="text" placeholder="name of founder" id="found" name="found" onkeyup="second()" style="margin-left:120px;" required><br/><br/>
                                           
										   
																		

        <input type="text" style="margin-left:120px;" id="randomfield" disabled>

		<script>
		// Do not remove this (it's just a comment and won't effect the functions)
		// SimpleCaptcha v1.0 © Anudeep Tubati
		function ChangeCaptcha() {
			var chars = "0123456789ABCDEFGHJKLMNOPQRSTUVWXTZabcdefghikmnopqrstuvwxyz";
			var string_length = 6;
			var ChangeCaptcha = '';
			for (var i=0; i<string_length; i++) {
				var rnum = Math.floor(Math.random() * chars.length);
				ChangeCaptcha += chars.substring(rnum,rnum+1);
			}
			document.getElementById('randomfield').value = ChangeCaptcha;
		}
		function check() {
		if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
		document.getElementById('submitbtn').disabled = false;
		document.getElementById('CaptchaEnter').disabled = true;
		}
		else {
		alert('Please re-check the captcha');
		
		
		}
		}
		</script>
		<br><br>
		<b id="lbl" style="margin-left:120px;">Enter captcha here:</b>
		<input id="CaptchaEnter" size="20" maxlength="6"  onblur= "check()" min="0" max="1"/><br/><br/><br/>
		
		<b id="lbl" style="margin-left:120px;">Upload the image of your registration card here:</b>
                                            <input type="file" name="pic" accept="image/*" id="fileToUpload" style="margin-left: 110px;"><br/></br>
		
		
                                    <input id="submitbtn" type="submit" disabled="disabled" name="next2" value="SUBMIT"><br/><br/><br/>
                                            </div><br/>
                                 </div>
    
                                  
                      </form>				
</div>
</body>
<style>
#randomfield { 
-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
  width: 200px;
  color: black;
  border-color: black;
  text-align: center;
  font-size: 40px;
  background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');
}
</style>
</html>