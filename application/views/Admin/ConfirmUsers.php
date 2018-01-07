<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<div id="container">
	<h1>Update User</h1>
	<b>Hi User</b>
	<form method="post">
	<input type="number" placeholder="ID" name="id" value="<?php echo $id; ?>" disabled><br/>
	<input type="text" placeholder="Name" name="name" value=" <?php echo $name; ?>" disabled><br/>
	<input type="text" placeholder="Gender" name="Gender" value="<?php echo $Gender; ?>" disabled><br/>
	<input type="text" placeholder="address" name="address" value="<?php echo $address; ?>" disabled><br/>
	<input type="text" placeholder="Birthday" name="Birthday" value="<?php echo $Birthday; ?>" disabled><br/>
	<input type="text" placeholder="id_no" name="id_no" value="<?php echo $id_no; ?>" disabled><br/>
	<input type="text" placeholder="course" name="course" value="<?php echo $course; ?>" disabled><br/>
	<input type="text" placeholder="contact" name="contact" value="<?php echo $contact; ?>" disabled><br/>
	<input type="text" placeholder="email" name="email" value="<?php echo $email; ?>" disabled><br/>
	
	<input type="submit" name="Confirm" value="Confirm">
	</form>
</div>

</body>
</html>