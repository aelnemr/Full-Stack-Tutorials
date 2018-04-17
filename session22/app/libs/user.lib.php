<?php
// libs/user.lib.php
$tableNameUser = "users";

function getAll()
{
	global $dbh;
	global $tableNameUser;

	$sql = "SELECT * FROM $tableNameUser";

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
	global $tableNameUser;

	$sql = "SELECT * FROM $tableNameUser WHERE id=:id";

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
	global $tableNameUser;

	$sql = "
		INSERT INTO $tableNameUser (full_name, username, password, email)
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
		return $dbh->lastInsertId();
	} else {
		return false;
	}
}

function update($full_name, $username, $password, $email, $id)
{
	global $dbh;
	global $tableNameUser;

	$sql = "
		UPDATE $tableNameUser SET full_name = :full_name,
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
	global $tableNameUser;

	$sql = "
		DELETE FROM $tableNameUser WHERE id =:id
	";

	$stm = $dbh->prepare($sql);

	$data = [ ':id' => $id ];

	if ($stm->execute($data)) {
		return true;
	} else {
		return false;
	}
}

function login($username, $password) {
    global $dbh;
    global $tableNameUser;

    $sql = "SELECT full_name, id, username FROM $tableNameUser 
            WHERE username=:username AND password=:password";
    $stm = $dbh->prepare($sql);

    $data = [
        ':username' => $username,
        ':password' => md5($password)
    ];

    if ($stm->execute($data)) {
        return $stm->fetch();
    } else {
        return false;
    }
}