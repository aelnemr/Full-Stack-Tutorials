<?php

$pattern_name = "/^[A-Z]{1}[a-z]{2,8} [A-Z]{1}[a-z]{2,8}$/";
$pattern_phone = "/^01[0-25][0-9]{8}$/";
$pattern_email = "/^[a-z]+\w+@[a-z]+\w+\.com$/i";
$pattern_com = "/.com$/i";
$rep_com = ".net";

$name = "Ahmed Elnemr";
$phone = "01505296753";
$email = "Ahmed@gma5l.com";
$text = 'I\'m ahmed       elnemr';

if (preg_match($pattern_email, $email)) {
	// echo $email;
}

$result = preg_replace("/\s+\/", "&#32;", $text);

echo $result;