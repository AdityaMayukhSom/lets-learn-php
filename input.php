<form action="input.php" method="post">
    <label for="name">Name : </label>
    <input type="text" name="name" autocomplete="false" />
    <br />
    <br />
    <label for="name">Age : </label>
    <input type="number" name="age" autocomplete="false" />
    <br />
    <br />
    <button type="submit">Click Me</button>
</form>

<?php
$my_name = $_POST["name"];
$my_age = $_POST["age"];
echo "$my_name is $my_age years old.";
echo "<br />";
echo var_dump($my_age);
echo "<br />";
echo var_dump($my_name);
?>
<h1></h1>