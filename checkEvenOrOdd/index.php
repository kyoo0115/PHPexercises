<?php

if(isset($_POST["mark"])){
	
	$mark = $_POST["mark"];

	if($mark % 2 == 0){

		echo "Even";
	}

	else{
		echo "Odd";
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
	<input type="text" name="mark" placeholder="Type here">
	<button type="submit">Check!</button>
	</form>
</body>
</html>