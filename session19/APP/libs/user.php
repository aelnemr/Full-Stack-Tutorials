<?php

function getAllUsers()
{
	global $dbh;

	$sql = "SELECT * FROM `users`";

	$stm = $dbh->prepare($sql);

	 
	if ($stm->execute()) {
	 	# get data

	 	/*
	 	$users = [];
	 	while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
	 		$users[] = $row;
	 	}
	 	*/

	 	return $stm->fetchAll(PDO::FETCH_ASSOC);
	 } else {
	 	return false;
	 }
}


function getUserById($id)
{
	global $dbh;

	$sql = "SELECT * FROM `users` WHERE id = $id";

	$stm = $dbh->prepare($sql);

	if ($stm->execute()) {
		return $stm->fetch(PDO::FETCH_ASSOC);
	} else {
		return false;
	}
}

function insertUser($full_name, $username, $password)
{
	global $dbh;

	$sql = "insert into users (username, full_name, password)
			values ('$username','$full_name','$password')";

	$stm = $dbh->prepare($sql);

	if ($stm->execute()) {
		return $dbh->lastInsertId();
	} else {
		return false;
	}	
}

function deleteUserById($id)
{
	global $dbh;

	$sql = "DELETE FROM `users` WHERE id=$id";

	$stm = $dbh->prepare($sql);

	if ($stm->execute()) {
		return true;
	} else {
		return false;
	}
}

function updateUser($id, $full_name, $username, $password)
{
	global $dbh;

	$sql = "UPDATE `users` SET username='$username', full_name='$full_name', password='$password'  WHERE id=$id";

	$stm = $dbh->prepare($sql);

	if ($stm->execute()) {
		return true;
	} else {
		return false;
	}	
}

