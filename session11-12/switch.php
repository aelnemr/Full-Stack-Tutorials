<?php


$input1 = 5;
$input2 = 7;
$opration = '-';


switch ($opration) {
	case '+':
		echo $input1 + $input2 . "<br>";
		break;
	case '-':
		echo $input1 - $input2 . "<br>";
		break;
	case '*':
		echo $input1 * $input2 . "<br>";
		break;
	case '/':
		echo $input1 / $input2 . "<br>";
		break;
	
	default:
		echo "Invalid Operator";
		break;
}


$result = 1 == 1 ?  "true" : "false";

echo $result;