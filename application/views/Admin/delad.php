<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
    
<head>
	<title>ADMIN</title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/designdelad.css">
</head>
    
<body style="background-image: url('<?php echo base_url(); ?>images/bg.png'); background-size:100%">
                    <div id="hdr"></div>
                      <img id="logo" src="<?php echo base_url(); ?>images/logoo.png" alt="Background"/>
	<div class="mainbutton">
	<ul>    
                                             <li class="hv"><a href="Admin">ACCOUNT</a></li>
                                            <li id="ad" style="color: #000; background-color: #E5E8E8;">ADMIN</li>
                                            <div class="admncntnt">
                                                <a href="viewad">View Admins</a>
                                                <a href="add">Add Admin</a>
                                                <a href="delad">Delete Admin</a>
                                            </div>
  		<li id="us" class="hv">USERS</li>
                                                <div class="usrcntnt">
                                                    <a href="Users">Confirm New Users</a>
                                                    <a href="delus">Delete User</a></div>
                                            <li id="pr" class="hv">PRODUCTS</li>
                                                <div class="prodcntnt">
                                                <a href="Prods">Confirm New Products</a>
                                                </div>    
  		<li class="hv"><a href="/buynsell/Admin/LogOut" >Log Out</a></li>
	</ul>
	</div>
       <div class="layy">
                        <img id="picc" src="<?php echo base_url(); ?>images/woman.png">
        </div>
    <div class="contt"></div>
                      
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
    </div>

</body>
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
</html>