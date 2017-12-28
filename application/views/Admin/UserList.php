<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $username; ?></td>
	<td>
		<a href='Admin/Update/?id=<?php echo $id; ?>'>Edit</a> |
		<a href="#" onclick="delete_user(<?php echo $id; ?>)">Delete</a>
	</td>
</tr>