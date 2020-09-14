<?php

$isset = false;

if(isset($_POST["mark1"]) && isset($_POST["mark2"])&&isset($_POST["mark3"])&&isset($_POST["mark4"])){
	
	$mark = array($_POST["mark1"], $_POST["mark2"],$_POST["mark3"],$_POST["mark4"]);

	$isset = true;
}

function printMax($mark){

	$maxValue = $mark[0];

	for($i = 0; $i<count($mark); $i++){
		if($maxValue < $mark[$i]){
			$maxValue = $mark[$i];
		}
	}

	echo $maxValue;
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
	<input type="text" name="mark4" placeholder="Type here">
	<button type="submit">Check!</button>
	</form>
	<div class="output">
	<p>
	<?php
		if($isset){
			printMax($mark);
		} 
	?>
	</p>
	</div>
</body>
</html>