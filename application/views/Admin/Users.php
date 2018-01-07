<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>CONFIRM</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/designadminuser.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
</head>
<body>
    
    <div class="layy">
        <h> Welcome Admin! </h>
    </div> 

<div id="container">
	<h2>List of Users to Confirm:</h2>
	<table border="1" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
        </table><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

</body>
</html>