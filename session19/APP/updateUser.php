<?php
require_once 'templates/layout/header.tpl';

if (isset($_GET['user_id'])) {

	$user = getUserById($_GET['user_id']);
} else {
	header("Location:404.php");
	exit();
}

?>
<div class="row">
	<div class="col-12">
		<div class="title-header">
			<h3>UPDATE USER</h3>
			<a href="index.php">ALL USERS</a>
		</div>
	</div>
	<div class="col-12">
		<form class="form" action="updateUser.php" method="post">
			<input type="hidden" 
					name="id" 
					value="<?php echo $user['id']; ?>">
			<div class="form-group">
				Full Name<input 
				type="text" 
				name="full_name" 
				class="form-control"
				value="<?php echo $user['full_name']; ?>">
			</div>
			<div class="form-group">
				Username<input type="text" name="username" class="form-control" 
				value="<?php echo $user['username']; ?>">
			</div>
			<div class="form-group">
				Password<input type="password" name="password" class="form-control"
				value="">
			</div>
			<div class="form-group">
				Re-Password<input type="password" name="re_password" class="form-control"
				value="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn">
					Save
				</button>					
			</div>
		</form>
	</div>
</div>
<?php require_once 'templates/layout/footer.tpl'; ?>