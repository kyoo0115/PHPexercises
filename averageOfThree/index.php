<?php

$isset = false;

if(isset($_POST["mark1"]) && isset($_POST["mark2"])&&isset($_POST["mark3"])){
	
	$mark = array($_POST["mark1"], $_POST["mark2"],$_POST["mark3"]);

	$isset = true;
}

function printAverage($mark){

	$array_count = count($mark);
	$array_sum = array_sum($mark);

	$average_array = $array_sum / $array_count;

	echo $average_array;
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
	<input type="text" name="mark3" placeholder="Type here">
	<button type="submit">Check!</button>
	</form>
	<div class="output">
	<p>
	<?php
		if($isset){
			printAverage($mark);
		} 
	?>
	</p>
	</div>
</body>
</html>