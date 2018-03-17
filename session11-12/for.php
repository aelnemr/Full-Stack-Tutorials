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
	"phone" => 234567890]
];

$phonebook = 
array( 
	array(
	"id" => "1",
	"name" => "Salaheldin",
	"phone" => 1234567890),
	array("id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890)
);

echo $phonebook[1]["name"];
*/

$phonebook = 
[ 
	[
	"id" => "1",
	"name" => "Salaheldin",
	"phone" => 1234567890],

	["id" => "2",
	"name" => "Ahmed alnemr",
	"phone" => 234567890]
];
?>

<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
	</tr>

	<?php  for ($i=0; $i < count($phonebook) ; $i++) { ?>

	<tr>
		<td><?php echo $phonebook[$i]['id'] ?></td>
		<td><?php echo $phonebook[$i]['name'] ?></td>
		<td><?php echo $phonebook[$i]['phone'] ?></td>
	</tr>

	<?php } ?>

</table>