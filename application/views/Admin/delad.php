<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<script>
		function delete_ad(id)
		{
			var response = confirm("Are you sure you want to delete id #"+id);
			if(response)
			{
				window.location.href='/buynsell/admin/Delete/?id=' +id;
			}
		}
	</script>


    	<title>DELETE ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminadd.css">
        <img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
</head>
<body>
    <div class="layy">
        <h> Welcome Admin! </h>
    </div> 
    <div id="container">
                 
                      <h2 style="margin-left: 20px;">Delete another Administrator:</h2><br/>
                      	<table border="1" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
        </table><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <button class ="bbtn"><a href="/buynsell/Admin/Admin">Back to Admin Menu</a></button><br><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>