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
	<input type="text" placeholder="Gender" name="Gender" <?php echo $Gender; ?> disabled><br/>
	<input type="text" placeholder="address" name="address" <?php echo $address; ?> disabled><br/>
	
	<input type="submit" name="submit" value="Submit">
	</form>
</div>

</body>
</html>