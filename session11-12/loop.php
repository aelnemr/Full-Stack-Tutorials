<?php
/*
$phonebook = 
[ 
	[
	"id" => "1",
	"name" => "Salaheldin",
	"phone" => 1234567890],

	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890],
	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890],
	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890],
	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890],
	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890],
	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890]
];


for ($i=0; $i < count($phonebook); $i++) { 
	echo $phonebook[$i]['name'] . 
			", phone: " .
			 $phonebook[$i]['phone'] .
			  "<br>";
}*/

/*$arr1 = [
	"id" => "1",
	"name" => "Salaheldin",
	"phone" => 1234567890];

foreach ($arr1 as $key=> $value) {
	echo $key . ": " .$value . "<br>";
}

*/
/*
$i = 6;

while ( $i <= 5) {

$i++;
echo "$i Hi";

}

$i = 6;
do{
	$i++;
	echo "$i Hi";
} while ( $i <= 5);
*/

$username = "admin";
$password = "12345";

$users = [
			['username'=>"admin2", "password"=> "5697"],
			["username"=> "admin5", "password"=> "12345"],
			["username"=> "admin", "password"=> "12345"],
			["username"=> "admin", "password"=> "12245"],
			["username"=> "admin7", "password"=> "12345"],
			["username"=> "admin9", "password"=> "12345"]
		];

$i = -1;
do{
	
$i++;
}while(
		$users[$i]['username'] != $username ||
		 $users[$i]['password'] != $password);

echo $i;