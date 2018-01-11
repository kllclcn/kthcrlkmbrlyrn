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
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/homes/designsignup.css">
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
	
    
	<form method="post">
                                <div class="container">
                                    
                                    <div class="brdr">
                                        <h2 class="ul2">STEP 1 -</h2><h2 class="ul3"> Account Set Up</h2><br/><br/>
		<label id="sulbl"><b>Create Username:</b></label>
		<input type="text" placeholder="Username" name="username" required style="margin-left: 20px;"><br/><br/>


		<label id="sulbl"><b>Password:</b></label>
		<input type="password" placeholder="Password" name="password" required style="margin-left: 74px;"><br/><br/>

		<label id="sulbl"><b> Confirm Password:</b></label>
		<input type="password" placeholder="Confirm Password" name="Cpassword" required style="margin-left: 7px;"><br/><br/>
                                    </div>
                                <div class="brdr">
                                  <h2 class="ul2">STEP 2 -</h2><h2 class="ul3"> Personal Information</h2><br/><br/>
                                    
                                            <label id="sulbl"><b>Full Name:</b></label>
		<input type="text" placeholder="Full Name" name="fullname" required style="margin-left:63px;"><br/><br/>
                
                                            <label id="sulbl"><b>Gender:</b></label><br/>
		<input  id= "sulbl" type="radio" name="gender" value="male" required style="margin-left:185px;"> Male<br/>
		<input id="sulbl" type="radio" name="gender" value="female" required style="margin-left:185px;"> Female<br/><br/>
                
                                            <label id="sulbl"><b>Address:</b></label>
		<input type="text" name="address" required style="margin-left:73px;"><br/><br/>

		<label id="sulbl"><b>Birthday:</b></label>
		<input type="date" name="bdate" required style="margin-left:71px;"><br/><br/>

		<label id="sulbl"><b>Mobile Number:</b></label>
		<input type="number" placeholder="MobileNumber" name="mobnum" required style="margin-left:20px;"><br/><br/>
                
                                            <label id="sulbl"><b>Email Address:</b></label>
		<input type="email" placeholder="Email Address" name="email" required style="margin-left:21px;"><br/><br/>

                                            </div>
                                   
                                <div class="brdr">
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
                      <script>
const source = document.querySelector("#course");
const target = document.querySelector("#dept1");
const targets = document.querySelector("#dept2");

const displayWhenSelected = (source, value, target) => {
    const selectedIndex = source.selectedIndex;
    const isSelected = source[selectedIndex].value === value;
    target.classList[isSelected
        ? "add"
        : "remove"
    ]("show");
};
source.addEventListener("change", (evt) =>
    displayWhenSelected(source, "crs1", target)
);
source.addEventListener("change", (evt) =>
    displayWhenSelected(source, "crs2", targets));
</script>
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