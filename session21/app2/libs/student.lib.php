<?php
// libs/user.lib.php
$tableName = "cars";

function getAllCar()
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


function getByIdCar($id)
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


function insertCar($name)
{
	global $dbh;
	global $tableName;

	$sql = "
		INSERT INTO $tableName (name)
		VALUES (:name)
	";

	$stm = $dbh->prepare($sql);

	$data = [
		':name' => $name
	];

	if ($stm->execute($data)) {
		return $dbh->lastInsertedId();
	} else {
		return false;
	}
}


function updateCar($name ,$id)
{
	global $dbh;
	global $tableName;

	$sql = "
		UPDATE $tableName SET name = :name
								
						  WHERE id = :id
	";

	$stm = $dbh->prepare($sql);

	$data = [
        ':name' => $name,
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