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
     * The PHP comparison operators are used to
     * compare two values (number or string):
     */
    $x = 5;
    $y = '5';

    echo "<h3>x == y: ", var_dump($x == $y), "</h3>";
    echo "<h3>x === y: ", var_dump($x === $y), "</h3>";

    $x = 5;
    $y = 10;

    echo "<h3>x != y: ", var_dump($x != $y), "</h3>";
    echo "<h3>x <> y: ", var_dump($x <> $y), "</h3>";
    echo "<h3>x !=== y: ", var_dump($x !== $y), "</h3>";
    echo "<h3>x > y: ", var_dump($x > $y), "</h3>";
    echo "<h3>x < y: ", var_dump($x < $y), "</h3>";
    echo "<h3>x >= y: ", var_dump($x >= $y), "</h3>";
    echo "<h3>x <= y: ", var_dump($x <= $y), "</h3>";

    /**
     * Spaceship operator:
     * Returns an integer less than, equal to, or greater than zero,
     * depending on if $x is less than, equal to, or greater than $y.
     * Introduced in PHP 7.
     */
    echo "<h3>x <=> y: ", $x <=> $y, "</h3>";
    ?>
</body>
</html>