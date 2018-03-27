<?php
require_once 'validations.php';
$name = "Ahmed Elnemr";
if (valid_name($name)) {
	echo "Valid Name";
} else {
	echo "Invalid Name";
}

echo $m;


if (valid_name("Ahmed Ali")) {
	echo "Valid Name";
} else {
	echo "Invalid Name";
}

