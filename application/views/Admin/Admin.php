<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
</head>
<body>

<div id="container">
	<h1>Welcome Admin!</h1>
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