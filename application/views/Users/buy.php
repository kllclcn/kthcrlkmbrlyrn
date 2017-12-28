<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<div id="container">
	<h1>Welcome Buyer!</h1>
	<table border="1" style="border-color: #000; border-collapse:collapse;">
	<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Category</th>
		<th>Price</th>
		<th>Product Description</th>
		<th>Meet up Place</th>
		<th>Date Posted</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<?php
		echo $list;
	?>
	</table>
</div>

</body>
</html>