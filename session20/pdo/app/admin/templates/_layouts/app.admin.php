<?php
// admin/templates/app.admin.php

function _header($pageTitle)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo APP_NAME; ?> | <?php echo $pageTitle; ?></title>
</head>
<body>
	Header
	<hr>
<?php
}

function _footer()
{
?>

	<hr>
	Footer
</body>
</html>

<?php
}

function _nav()
{
?>
<nav>
	<ul>
		<li>HOME</li>
		<li>ADD NEW</li>
	</ul>
</nav>
<?php
}
?>