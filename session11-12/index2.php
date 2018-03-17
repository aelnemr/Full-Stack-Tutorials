<?php
$data = [
	['id'=>1, 'name'=>"ahmed"],
	['id'=>2, 'name'=>"ali"],
	['id'=>3, 'name'=>"mohamed"],
	['id'=>4, 'name'=>"salah"],
	['id'=>5, 'name'=>"sherif"],
	['id'=>6, 'name'=>"abdo"],
	['id'=>7, 'name'=>"Yahia"]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) : 

		if ($value['id'] % 2 != 0) {
			?>
		<tr>
			<td class="red"><?php echo $value['id']; ?></td>
			<td class="red"><?php echo $value['name']; ?></td>
		</tr>
			<?php
		} else {
			?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
		</tr>
		<?php } endforeach; ?>
	</tbody>
</table>
</body>
</html>




