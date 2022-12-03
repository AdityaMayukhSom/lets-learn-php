<form action="calculator.php" method="post">
	<label for="num1">Number 1 : </label>
	<input type="number" step="any" name="num1" id="input1" />
	<br />
	<label for="num2">Number 2 : </label>
	<input type="number" step="any" name="num2" id="input2" />
	<br />
	<button type="submit">Add Numbers</button>
</form>
<div>
	<?php
	$num1 = (float)$_POST["num1"];
	$num2 = (float)$_POST["num2"];
	$result = $num1 + $num2;
	echo "sum of $num1 and $num2 is $result. <br />";
	?>
	Answer : <?php echo $_POST["num1"] + $_POST["num2"]  ?>
</div>