<?php


$students = [
			"Sherif",
			"Salah",
			"Ali", 
			"Mohamed", 
			"Ahmed"];

// $students = array("Sherif", "Salah", "Ali", "Mohamed", "Ahmed");


// var_dump($students );
//Yahia

// $newIndex  = count($students);// get array size
// $students[$newIndex] = "Yahia";

// $students[] = "Yahia";

// var_dump($students );
// -        ---- -----


// $arr = ['Ahmed', "Ali", 5, "true"];

/*
$arr = array(
		[1, 2, 3],
		["a", "c", "f"],
		[true, false, true, "x"]
	);
$newRow = [["vxcv", "asd"], "asd2", "asd3"];

$arr[] = $newRow ;

echo $arr[3][0][0];
*/

// $students = array(
// 		[10001, "Ahmed Elnemr", ["HTML", "CSS", "Jss"]], //0
// 		[10002, "Ahmed Ali", ["HTML", "C++", "Jss"]],    //1
// 		//0    , 1              , 2 [0,      1,     2] 
// 		[10003, "Mohamed Mahmod", ["HTML", "PHP", "Jss"]],//2
// 		[10004, "Fatama Ali", ["HTML", "CSS", "SQL"]] //3
// 	);

// echo $students[2][2][1];

$students = [
			"id10001" =>["id"=>10001, 
						"name"=> "Ahmed", 
						"subjects"=>["HTML", "PHP", "Jss"]],

			"id10002" =>["id"=>10002, 
						"name"=> "Ali",
						"subjects"=>["HTML", "PHP", "Jss"]],

			"id10003" =>["id"=>10003, 
						"name"=> "Mohamed",
						"subjects"=>["HTML", "PHP", "Jss"]],

			"id10004" =>["id"=>10004, 
						"name"=> "PHP",
						"subjects"=>["HTML", "PHP", "Jss"]]
			];


// var_dump($students["id10003"]["subjects"]);

?>

<table>
	<tr>
		<td>ID</td> 
		<td>Name</td>
	</tr>
	<tr>
		<td><?php echo $students["id10003"]["id"]; ?></td>
		<td><?php echo $students["id10003"]["name"]; ?></td>
	</tr>
</table>