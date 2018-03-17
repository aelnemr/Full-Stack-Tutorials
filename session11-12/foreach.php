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

	<?php 
	foreach ($phonebook as $row) :
		?>

		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['phone'] ?></td>
		</tr>

		<?php
	endforeach;
	?>


</table>