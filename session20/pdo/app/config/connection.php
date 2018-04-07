<?php
/*
	# Database connection
*/

try {
	$dbh = new PDO(DSN, USERNAME, PASSWORD, $options);
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}
