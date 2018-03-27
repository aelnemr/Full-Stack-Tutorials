<?php
	define('PATTERN_EMAIL', "/^[a-z]+\w+@[a-z]+\w+\.com$/i");
	define('PATTERN_NAME', "/^[A-Z]{1}[a-z]{2,8} [A-Z]{1}[a-z]{2,8}$/");
	define('PATTERN_PHONE', "/^01[0-25][0-9]{8}$/");
	
function valid_name($name, $m){

	$name = "Ali";

	$m = [1,2,3];

	if (preg_match(PATTERN_NAME, $name)) {
		return true;
	} else {
		return false;
	}
	
}

function valid_email($email){

	if (preg_match(PATTERN_EMAIL, $email)) {
		return true;
	} else {
		return false;
	}
	
}


function valid_phone($phone){

	if (preg_match(PATTERN_PHONE, $phone)) {
		return true;
	} else {
		return false;
	}
	
}
