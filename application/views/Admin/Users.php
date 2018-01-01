<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>CONFIRM</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/logindesign.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 100%;'/>
</head>
<body>

<div id="container">
	<h1>Welcome Admin!</h1>
	<h2>List or Users to Confirm:</h2>
	<table border="1" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
	</table>
</div>

</body>
</html>