<?php
/*echo "Hi, " . $_GET['username'];
echo " ,With password, " . $_GET['password'];
*/

$input1 = $_GET['n1'];
$input2 = $_GET['n2'];
$opration = $_GET['op'];



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
?>

<form>
	<input type="number" name="n1">
	<select name="op">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="number" name="n2">
	<input type="submit" value="Send">
</form>