<?php

$isset = false;

if(isset($_POST["mark1"]) && isset($_POST["mark2"])){
	
	$mark = array($_POST["mark1"], $_POST["mark2"]);

	$isset = true;
}

function addition($mark){

	$add = array_sum($mark);
	echo "Their sum is " .$add;
}

function subtraction($mark){

	$number1 = $_POST['mark1'];
	$number2 = $_POST['mark2'];
	$sum = $number1 - $number2;
	echo "Their difference is "  .$sum; 
}
function multiplication($mark){

	$number1 = $_POST['mark1'];
	$number2 = $_POST['mark2'];
	$multiply = $number1 * $number2;
	echo "Their product is " .$multiply;

}
function division($mark){

	$number1 = $_POST['mark1'];
	$number2 = $_POST['mark2'];
	$quotient = $number1 / $number2;
	echo "Their quotient is " .$quotient;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
	<input type="text" name="mark1" placeholder="Type here">
	<input type="text" name="mark2" placeholder="Type here">
	<button type="submit">Check!</button>
	</form>
	<div class="output">
	<p>
	<?php
		if($isset){
			addition($mark);
			echo "<br>";
			subtraction($mark);
			echo "<br>";
			multiplication($mark);
			echo "<br>";
			division($mark);
		} 
	?>
	</p>
	</div>
</body>
</html>