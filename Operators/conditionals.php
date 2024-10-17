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
     * Ternary (?:):
     * Returns the value of $x.
     * The value of $x is expr2 if expr1 = TRUE.
     * The value of $x is expr3 if expr1 = FALSE.
     */
    $x = 5;
    $y = 10;

    echo "<h3>(x != y) ? TRUE : FALSE = ";
    echo ($x != $y) ? 'TRUE' : 'FALSE';
    echo "</h3>";

    /**
     * Null coalescing (??):
     * Returns the value of $x.
     * The value of $x is expr1 if expr1 exists, and is not NULL.
     * If expr1 does not exist, or is NULL, the value of $x is expr2.
     * Introduced in PHP 7.
     */
    echo "<h3>x = $z ?? NULL = ";
    $x = $z ?? NULL;
    echo var_dump($x), "</h3>";
    ?>
</body>
</html>