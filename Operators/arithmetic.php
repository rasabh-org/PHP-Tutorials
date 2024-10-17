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
     * The PHP arithmetic operators are used with numeric values to perform common
     * arithmetical operations, such as addition, subtraction, multiplication etc.
     */
    $x = 5;
    $y = 10;

    echo "<h3>x + y = ", $x + $y, "</h3>";      // Addition
    echo "<h3>x - y = ", $x - $y, "</h3>";      // Subtraction
    echo "<h3>x * y = ", $x * $y, "</h3>";      // Multiplication
    echo "<h3>x / y = ", $x / $y, "</h3>";      // Division
    echo "<h3>x % y = ", $x % $y, "</h3>";      // Modulo
    echo "<h3>x ** y = ", $x ** $y, "</h3>";    // Exponentiation
    ?>
</body>
</html>