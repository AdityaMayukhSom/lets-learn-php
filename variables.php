<?php
/* PHP Data Types */
/*
    - String    Series of characters surrounded by quotes
    - Integer   Whole numbers
    - Float     Decimal Numbers
    - Boolean   true or false
    - Array     Special variables, which can hold more than one value
    - Object    An instance of a class
    - NULL      Empty variable
    - Resource  Special variable that holds a resource
*/
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _)
- Variables can't start with a number
- Variables are case-sensitive
*/
?>

<h1>
    <?php
    define('PI', 3.14159); // defining a constant
    $my_name = "Aditya Mayukh Som";
    $food_name = "Biriyani";
    // echo 'I Love ' . $food_name; // . operator works as concatenation
    // echo "I love ${food_name}."
    echo strtoupper($food_name);
    echo "<br />";
    echo strlen($my_name);
    echo "<br />";
    echo $my_name[0];
    echo "<br />";
    echo str_replace("Aditya Mayukh Som", "Dipta Majhi", $my_name);
    echo "<br />";
    echo $my_name;
    echo "<br />";
    echo substr($my_name, 0, 6);
    echo "<br />";
    echo 10 / 4;
    echo "<br />";
    echo abs(-100);
    echo "<br />";
    echo pow(3, 4);
    echo "<br />";
    echo sqrt(120);
    echo "<br />";
    echo max(3, 10);
    echo "<br />";
    echo min(7, 2);
    echo "<br />";
    echo round(3.7);
    echo "<br />";
    echo ceil(3.2);
    echo "<br />";
    echo floor(3.8);
    echo "<br />";
    ?>
</h1>