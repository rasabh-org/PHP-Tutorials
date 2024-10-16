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
    // The pi() function returns pi.
    echo "<h3>The value of pi: ", pi(), "</h3>";

    // max() and min() returns the maximum and minimum of values
    $arr = array(0, 255, 128, -255, -32, 68);

    echo "<hr><h3>The minimum of the array: ", min($arr), "</h3>";
    echo "<h3>The maximum of the array: ", max($arr), "</h3>";

    // abs() returns the absolute value of a number
    echo "<hr><h3>The absolute value of -10.56 is ", abs(-10.56), ".</h3>";

    // sqrt() returns the square root of a number
    echo "<hr><h3>The square root of 64 is ", sqrt(64), ".</h3>";

    // round() rounds a float to the nearest integer
    echo "<hr><h3>The rounded value of -10.56 is ", round(-10.56), ".</h3>";

    /**
     * Generating random numbers:
     * The rand() function generates a random number.
     * To get more control over the random number, you can add the optional
     * min and max parameters to specify the lowest integer and the highest integer
     * to be returned.
     */
    echo "<hr><h3>Random number without parameters: ", rand(), "</h3>";
    echo "<h3>Random number with parameters: ", rand(10, 100), "</h3>";

    // Base conversion from one base to another
    echo "<hr><h3>Base conversion from decimal 65 to octal: ", base_convert(65, 10, 8), "</h3>";

    // Natural and base-10 logarithm
    echo "<hr><h3>Natural logarithm of 105: ", log(105), "</h3>";
    echo "<hr><h3>Base-10 logarithm of 105: ", log10(105), "</h3>";
    ?>
</body>
</html>