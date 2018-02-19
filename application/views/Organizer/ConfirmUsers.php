<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <title>CONFIRM USER</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminusers.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
</head>
<body>

<div id="container">
	<h1>Confirm Users</h1>
	<b>Hi Admin!</b>
	<form method="post">
                      <label>ID:</label>
	<input type="number" placeholder="ID" name="id" value="<?php echo $id; ?>" disabled><br/>
                       <label>Name:</label>
	<input type="text" placeholder="Name" name="name" value=" <?php echo $name; ?>" disabled><br/>
                       <label>Sex:</label>
	<input type="text" placeholder="Gender" name="Gender" value="<?php echo $Gender; ?>" disabled><br/>
                       <label>Address:</label>
	<input type="text" placeholder="address" name="address" value="<?php echo $address; ?>" disabled><br/>
                      <label>Birthday:</label>
	<input type="text" placeholder="Birthday" name="Birthday" value="<?php echo $Birthday; ?>" disabled><br/>
                      <label>Student Number:</label>
	<input type="text" placeholder="id_no" name="id_no" value="<?php echo $id_no; ?>" disabled><br/>
                      <label>Course:</label>
	<input type="text" placeholder="course" name="course" value="<?php echo $course; ?>" disabled><br/>
                     <label>Contact Information:</label>
	<input type="text" placeholder="contact" name="contact" value="<?php echo $contact; ?>" disabled><br/>
                      <label>Email Address:</label>
	<input type="text" placeholder="email" name="email" value="<?php echo $email; ?>" disabled><br/>
	
	<input class="bbtn" type="submit" name="Confirm" value="Confirm">
	</form>
</div>

</body>
</html>	