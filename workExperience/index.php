<?php

$isset = false;

if(isset($_POST["mark1"])){
	
	$mark = $_POST["mark1"];

	$isset = true;
}
function workExperience($mark){
	if($mark == 0){
		echo "Fresh Graduate";
	}
	else if($mark <= 3 && $mark >= 1){
		echo "Mid-Level";
	}
	else if($mark <= 8 && $mark >= 4){
		echo "Senior Level";
	}
	else if($mark <= 30 && $mark >= 9){
		echo "Superman";
	}
	else{
		echo "God :)";
	}
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
	<button type="submit">Check!</button>
	</form>
	<div class="output">
	<p>
	<?php
		if($isset){
			workExperience($mark);
		} 
	?>
	</p>
	</div>
</body>
</html>