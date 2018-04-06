<?php
require_once 'templates/layout/header.tpl';

if(isset($_POST['username'],
		 $_POST['full_name'], 
		 $_POST['password'], 
		 $_POST['re_password'])) {

	 $username = $_POST['username'];
	 $full_name = $_POST['full_name'];
	 $password = $_POST['password'];
	 $re_password = $_POST['re_password'];

	if(insertUser(
	 	$full_name,
	 	$username,
	 	$password
	 )) {

	 echo "done";

	} else {
		echo "error";
	}
}
?>
<div class="row">
	<div class="col-12">
		<div class="title-header">
			<h3>ADD USER</h3>
			<a href="index.php">ALL USERS</a>
		</div>
	</div>
	<div class="col-12">
		<form class="form" action="adduser.php" method="post">
			<div class="form-group">
				Full Name<input type="text" name="full_name" class="form-control">
			</div>
			<div class="form-group">
				Username<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				Password<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				Re-Password<input type="password" name="re_password" class="form-control">
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