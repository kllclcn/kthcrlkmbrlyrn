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
	<script>
		function delete_user(id)
		{
			var response = confirm("Are you sure you want to delete id #"+id);
			if(response)
			{
				window.location.href='/buynsell/admin/delete/?id=' +id;
			}
		}
	</script>


	<title>ACCOUNT / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designviewad.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
	
	
	
</head>
<body>
    
        <div class="mainbutton">
    <li>VIEW ADMINS</li>
	</div>
    
    <div id="container">
                       <h1>ADMINS</h1>
	<table border="2" style="border-color: #000; border-collapse:collapse;">
	<tr>
        <th>Admin ID</th>
		<th>Admin Username</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
        </table><br><br><br><br><br><br><br><br><br><br>
        <button class ="bbtn"><a href="/buynsell/Admin/Admin">Back to Menu</a></button><br><br><br><br><br><br>
</div>
</body>
</html>


