<?php
/*
$n1 = 5;
$n2 = 2;

echo $n1;


swap($n1, $n2);

echo $n1;*/
/*
define('NAME', 'test');


test_demo("sad", "Ad", $m);

echo $m;



function test_demo($exp, $strin, &$matches="")
{
	$matches = "from fun";
}




function swap(&$n1, &$n2)
{
	$temp = $n1;
	$n1 = $n2;
	$n2 = $temp;

	return $n1;
}*/

$value = 5;

// echo $value . "<br>";

$y = 2;

demo($value, $y);

echo $value . "<br>"; // 6
echo $y . "<br>";

echo demo($value) . "<br>"; // 6, 6, 6, 7

echo $y . "<br>";



// echo $value . "<br>"; // 7

function demo(&$value, &$y="0")
{
	++$value;
	$y += $value;
	return $y;
}
