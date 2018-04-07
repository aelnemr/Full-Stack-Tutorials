<?php
// admin/index.php
require_once '../config/config.php';


_header("HOME");

?>

<div class="container">
	<table>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<tr>
			<?php
			foreach (getAll() as $user) {
			?>

			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['full_name']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><a href="">Edit</a></td>
			<td><a href="">Delete</a></td>

			<?php
			}
			?>
		</tr>
	</table>
</div>

<?php
_footer();
?>


