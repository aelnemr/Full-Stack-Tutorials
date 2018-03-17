<?php

$degree = 80;

if ($degree > 100) {
	echo "Invalid Input";
} elseif ( 80 <= $degree) {
	echo "A";
} else if(70 <= $degree) {
	echo "B";
} else if(60 <= $degree) {
	echo "C";
} else if(50 <= $degree) {
	echo "D";
} else {
	echo "F";
}




