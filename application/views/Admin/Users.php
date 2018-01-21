<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>CONFIRM</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designadminusersx.css">
</head>
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png')">
    <img src="<?php echo base_url(); ?>images/logoo.png" alt="Background" style='margin-left:490px;'/>
    
<div class="layy">
                   <img id="picc" src="<?php echo base_url(); ?>images/woman.png"><br><br><br>
	<div class="layyy">
              		<li><a href="admin">ACCOUNT</a></li><br/>
                                            <li id="click">CONFIRM NEW USERS</li><br/>
                                            <li><a href="prods">CONFIRM NEW PRODUCTS</a></li><br/>
                                            <li><a href="Add">ADD ADMIN</a></li><br/>
                                            <li><a href="viewad">VIEW ADMINS</a></li><br/>
                                            <li><a href="delad">DELETE ADMINS</a></li>	
	</div>
</div>

<div id="container">
	 <img id="pic" src="<?php echo base_url(); ?>images/ad1.png">
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
          

</div>

</body>
</html>