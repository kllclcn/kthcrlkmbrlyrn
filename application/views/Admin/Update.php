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
	<input type="text" placeholder="Username" name="username" value=" <?php echo $username; ?>" required><br/>
	<input type="password" placeholder="Password" name="password" required><br/>
	<input type="submit" name="submit" value="Submit">
	</form>
</div>

</body>
</html>