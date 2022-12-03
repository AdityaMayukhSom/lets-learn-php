<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="input.php" method="post">
        <label for="name">Name : </label>
        <input type="text" name="name" autocomplete="false" />
        <br />
        <br />
        <label for="name">Age : </label>
        <input type="number" name="age" autocomplete="false" />
        <br />
        <br />
        Apples :
        <input type="checkbox" name="fruits[]" value="apples" />
        <br />
        Oranges :
        <input type="checkbox" name="fruits[]" value="oranges" />
        <br />
        Bananas :
        <input type="checkbox" name="fruits[]" value="bananas" />
        <br />
        <button type="submit">Click Me</button>
    </form>
    <?php
    $my_name = $_POST["name"];
    $my_age = $_POST["age"];
    echo "$my_name is $my_age years old.";
    echo "<br />";
    $my_fruits = $_POST["fruits"];
    echo "<br />";
    print_r($my_fruits);
    // echo var_dump($my_age);
    // echo "<br />";
    // echo var_dump($my_name);
    ?>
</body>

</html>