<?php


function _header_view($pageTitle)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo APP_NAME; ?> | <?php echo $pageTitle; ?></title>
</head>
<body>
	Header View
	<hr>
<?php
}

function _footer_view()
{
?>

	<hr>
	Footer View
</body>
</html>

<?php
}

function _nav_view()
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