<?php
// libs/user.lib.php
$tableName = "users";

function getAll()
{
	global $dbh;
	global $tableName;

	$sql = "SELECT * FROM $tableName";

	$stm = $dbh->prepare($sql);

	if ($stm->execute()) {
		return $stm->fetchAll();
	} else {
		return false;
	}
}


function getById($id)
{
	global $dbh;
	global $tableName;

	$sql = "SELECT * FROM $tableName WHERE id=:id";

	$stm = $dbh->prepare($sql);

	$data = [':id'=> $id];

	if ($stm->execute($data)) {
		return $stm->fetch();
	} else {
		return false;
	}
}


function insert($full_name, $username, $password, $email)
{
	global $dbh;
	global $tableName;

	$sql = "
		INSERT INTO $tableName (full_name, username, password, email)
		VALUES (:full_name, :username, :password, :email)
	";

	$stm = $dbh->prepare($sql);

	$data = [
		':full_name' => $full_name,
		':username' => $username,
		':password' => md5($password),
		':email' => $email
	];

	if ($stm->execute($data)) {
		return $dbh->lastInsertedId();
	} else {
		return false;
	}
}


function update($full_name, $username, $password, $email, $id)
{
	global $dbh;
	global $tableName;

	$sql = "
		UPDATE $tableName SET full_name = :full_name,
								username = :username,
								password = :password,
								email = :email
						  WHERE id = :id
	";

	$stm = $dbh->prepare($sql);

	$data = [
		':full_name' => $full_name,
		':username' => $username,
		':password' => md5($password),
		':email' => $email,
		':id' => $id
	];

	if ($stm->execute($data)) {
		return true;
	} else {
		return false;
	}
}

function delete($id)
{
	global $dbh;
	global $tableName;

	$sql = "
		DELETE FROM $tableName WHERE id =:id
	";

	$stm = $dbh->prepare($sql);

	$data = [ ':id' => $id ];

	if ($stm->execute($data)) {
		return true;
	} else {
		return false;
	}
}