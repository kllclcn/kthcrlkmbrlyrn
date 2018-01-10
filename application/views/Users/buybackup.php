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
	<title>LOGIN / PUP BUY AND SELL </title>
	<link rel="icon" href="<?php echo base_url(); ?>images/pupseal.png">
                      <link rel="stylesheet" href="<?php echo base_url(); ?>css/designbuyy.css">
	<img src="<?php echo base_url(); ?>images/mains.png" alt="Background" style='width: 1330px;'/>
	
</head>
<body>

   <div class="layy">
                <li><a href="usermain">ACCOUNT</a></li>
                <li style="color: #000; background-color: #f8f9f9;">BUY</li>
                <li><a href="sell" >SELL</a></li>
    </div>
    
<div class="container">
	<br/><br/><table border="2" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>Product Name</th>
		<th>Price</th>
		<th>Meet up Place</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
	</table>
</div>

</body>
</html>