<?php
require_once 'templates/layout/header.tpl';


if (isset($_GET['delete']) ) {
	if ($_GET['delete'] == null) {
		header("Location:404.php");
		exit();
	}
	$id = $_GET['delete'];
	deleteUserById($id);
	exit(header("Location:index.php"));
}


$allUsers = getAllUsers();


?>
<div class="row">
	<div class="col-12">
		<div class="title-header">
			<h3>All Users</h3>
		</div>
	</div>
	<div class="col-12">
	<a href="adduser.php" class="btn">ADD NEW USER</a>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>username</th>
					<th>full name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach ($allUsers as $user) :
			?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['full_name']; ?></td>
				<td><a href="updateUser.php?user_id=<?php echo $user['id']; ?>" class="btn"> Edit </a></td>
				<td>
					<a
					 href="index.php?delete=<?php echo $user['id']; ?>" class="btn"> 
						Delete
					</a>
				</td>
			</tr>

			<?php
			endforeach;
			?>
				
			</tbody>
		</table>
	</div>
</div>

<?php require_once 'templates/layout/footer.tpl'; ?>

