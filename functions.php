<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions In PHP</title>
</head>

<body>
    <?php
    function sayHi(string $username): void {
        echo "Hello $username. <br />";
        return;
    }
    function fast_power(int $base, int $exponent): int {
        if ($base == 0) return 0;
        if ($exponent == 0) return 1;
        $half_power = fast_power($base, floor($exponent / 2));
        $full_power = $half_power * $half_power;
        return ($exponent % 2 == 0) ? $full_power : ($base * $full_power);
    }
    function get_max(int $num1, int $num2): int {
        return ($num1 > $num2) ? $num1 : $num2;
    }
    sayHi("Aditya");
    sayHi("Roheena");
    sayHI("David");
    echo fast_power(27, 5) . "<br />";
    echo get_max(9, 19) . "<br />";
    ?>
</body>

</html>