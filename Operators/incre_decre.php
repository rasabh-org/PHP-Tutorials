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
     * The PHP increment operators are used to increment a variable's value.
     * The PHP decrement operators are used to decrement a variable's value.
     */
    $x = 5;

    // Return the value by 1 first, increment/decrement later
    echo "<h3>x++ = ", $x++, "</h3>";
    echo "<h3>x-- = ", $x--, "</h3>";

    // Increment/decrement the value first, return later
    echo "<h3>++x = ", ++$x, "</h3>";
    echo "<h3>--x = ", --$x, "</h3>";
    ?>
</body>
</html>