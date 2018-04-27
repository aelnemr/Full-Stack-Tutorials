<?php
// libs/user.lib.php
$tableName = "students";

function getAllStudents()
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


function getByIdStudents($id)
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


function insertStudents($name, $email, $phone)
{
	global $dbh;
	global $tableName;

	$sql = "
		INSERT INTO $tableName (name, phone, email)
		VALUES (:name, :phone, :email)
	";

	$stm = $dbh->prepare($sql);

	$data = [
		':name' => $name,
		':phone' => $phone,
		':email' => $email
	];

	if ($stm->execute($data)) {
		return $dbh->lastInsertedId();
	} else {
		return false;
	}
}


function updateStudents($name, $phone, $email, $id)
{
	global $dbh;
	global $tableName;

	$sql = "
		UPDATE $tableName SET name = :name,
								phone = :phone,
								email = :email
						  WHERE id = :id
	";

	$stm = $dbh->prepare($sql);

	$data = [
        ':name' => $name,
        ':phone' => $phone,
        ':email' => $email,
		':id' => $id
	];

	if ($stm->execute($data)) {
		return true;
	} else {
		return false;
	}
}

function deleteStudent($id)
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