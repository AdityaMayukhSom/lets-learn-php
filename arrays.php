<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php Arrays</title>
</head>

<body>
	<form action="arrays.php" method="post">
		<label for="student-name">Enter Student Name : </label>
		<input type="text" name="student_name" id="student-name" />
		<br>
		<button type="submit">Press Me</button>
	</form>
	<?php
	// this arrays are dynamic in nature, we can store multiple types of data in the same array
	$friends = array("Dipta", "Somoprovo", "Soham", "Debabrata", "Ayantik");
	$friends[4] = "Roheena";
	$friends[8] = "Chintan";
	$friends[10] = "Asmita";
	// echo count($friends); // still answer is 7, not 11

	$grades_map = array("Aditya" => "A+", "Somoprovo" => "A", "Rishav" => "B+", "Arindam" => "C+");
	$student_name = $_POST["student_name"];
	$student_grade = $grades_map[$student_name];
	echo "$student_name got $student_grade. <br />"
	?>
</body>

</html>