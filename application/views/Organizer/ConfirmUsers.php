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
			 <label id="lbl"><?php echo $yearsec; ?></label><br><br>
			 <img id="pic" src="<?php echo $imageproduct; ?>" height="90" width="90"/><br><br><br><br>
	
	<input class="bbtn" type="submit" name="Confirm" value="Confirm">
	</form>
</div>

</body>
</html>	