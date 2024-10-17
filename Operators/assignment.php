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
     * The PHP assignment operators are used
     * with numeric values to write a value to a variable.
     */
    $x = 5;
    $y = 10;

    echo "<h3>x = $x</h3>";
    echo "<h3>y = $y</h3>";

    $x = $y;

    echo "<hr><h2 style='color: Green'>x = y</h2>";
    echo "<h3>x = $x</h3>";
    echo "<h3>y = $y</h3>";

    $x += $y;

    echo "<hr><h2 style='color: Green'>x += y</h2>";
    echo "<h3>x = $x</h3>";

    $x -= $y;

    echo "<hr><h2 style='color: Green'>x -= y</h2>";
    echo "<h3>x = $x</h3>";

    $x *= $y;

    echo "<hr><h2 style='color: Green'>x *= y</h2>";
    echo "<h3>x = $x</h3>";

    $x /= $y;

    echo "<hr><h2 style='color: Green'>x /= y</h2>";
    echo "<h3>x = $x</h3>";

    $x %= $y;

    echo "<hr><h2 style='color: Green'>x %= y</h2>";
    echo "<h3>x = $x</h3>";
    ?>
</body>
</html>