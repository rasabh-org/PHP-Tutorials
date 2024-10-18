<?php declare(strict_types = 1);    //Strict requirement
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="server, php">
    <meta name="author" content="Raan Saurav Bhuyan">
    <meta name="description" content="PHP tutorial and guide.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * Strict type declarations:
     ** To specify strict we need to set declare(strict_types=1);.
     ** This must be on the very first line of the PHP file.
     * by adding the strict declaration, it will throw a "Fatal Error"
     * if the data type mismatches.
     */
    function print_details(string $name, int $age) {
        echo "<h2 style='color: Green'>My Details</h2>";

        echo "<h3>My name is $name.</h3>";
        echo "<h3>My age is $age.</h3>";
    }

    print_details("Raan Saurav Bhuyan", 25);

    /**
     * Return type declarations:
     * To declare a type for the function return, add a colon ( : ) and
     * the type right before the opening curly ( { ) bracket when declaring the function.
     */
    function sum_of_floats(float ...$num) : int {
        $sum = 0.0;

        foreach ($num as $n) {
            $sum += $n;
        }

        return (int) $sum;
    }

    echo "<h3>Sum of the numbers are rounded up: ", sum_of_floats(1.5, 3.5, 5.5), ".</h3>";
    ?>
</body>
</html>