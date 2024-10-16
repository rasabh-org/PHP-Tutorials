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
     * There are three main numeric types:
     * 1. Integer
     * 2. Float
     * 3. Number strings
     *
     * In addition these, there's two more:
     * 1. Infinity
     * 2. NaN
     */
    $x = 25;
    echo "<h4>Type of x: ", var_dump($x), "</h4>";

    $y = 25.5;
    echo "<h4>Type of y: ", var_dump($y), "</h4>";

    $z = '25';
    echo "<h4>Type of z: ", var_dump($z), "</h4>";

    /**
     * PHP has the following constants for integer types:
     * 1. PHP_INT_MAX - The largest integer supported
     * 2. PHP_INT_MIN - The smallest integer supported
     * 3. PHP_INT_SIZE - The size of an integer in bytes
     */
     echo "<h4>The largest integer supported: " . PHP_INT_MAX . ".</h4>";
     echo "<h4>The smallest integer supported: " . PHP_INT_MIN . ".</h4>";
     echo "<h4>The size of an integer in bytes: " . PHP_INT_SIZE . ".</h4>";

    /**
     * PHP has the following functions to check the validity of integer:
     * 1. is_int()
     * 2. is_integer() - alias of is_int()
     * 3. is_long() - alias of is_int()
     */
    echo "<hr><h3>is_int(x): ", var_dump(is_int($x)), "</h3>";
    echo "<h3>is_integer(y): ", var_dump(is_integer($y)), "</h3>";
    echo "<h3>is_long(z): ", var_dump(is_long($z)), "</h3>";

    /**
     * PHP has the following constants for float types:
     * 1. PHP_FLOAT_MAX - The largest representable floating point number
     * 2. PHP_FLOAT_MIN - The smallest representable positive floating point number
     * 3. PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
     * 4. PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
     */
    echo "<hr><h4>The largest representable floating point number: " . PHP_FLOAT_MAX . "</h4>";
    echo "<h4>The smallest representable floating point number: " . PHP_FLOAT_MIN . "</h4>";
    echo "<h4>The number of significant digits without precision loss: " . PHP_FLOAT_DIG . "</h4>";
    echo "<h4>The smallest representable floating point number x so that x + 1.0 != 1.0: " . PHP_FLOAT_EPSILON . "<h4>";

    /**
     * PHP has the following functions to check the validity of a float:
     * 1. is_float()
     * 2. is_double() - alias for is_float()
     */
    echo "<hr><h3>is_float(y): ", var_dump(is_float($y)), "<h3>";
    echo "<h3>is_double(x): ", var_dump(is_double($x)), "<h3>";

    /**
     * PHP Infinity: A numeric value larger than PHP_FLOAT_MAX is considered infinite.
     * PHP has the following functions to check if a numeric value is infinite or not:
     * 1. is_finite()
     * 2. is_infinite()
     */
    echo "<hr><h3>is_finite(y): ", var_dump(is_finite($y)), "<h3>";
    echo "<h3>is_infinite(y): ", var_dump(is_infinite($y)), "<h3>";

    /**
     * NaN stands for Not a Number.
     * NaN is used for impossible mathematical operations.
     * PHP has the following functions to check if a value is not a number:
     * 1. is_nan()
     */
    $cos = acos(8);
    echo "<hr><h3>is_nan(cos): ", var_dump(is_nan($cos)), "</h3>";

    /**
     * Numeric Strings: The PHP is_numeric() function can be used to find whether
     * a variable is numeric. The function returns true if the variable is a number
     * or a numeric string, false otherwise.
     */
    echo "<hr><h3>is_numeric(256): ", var_dump(is_numeric(256)), "</h3>";
    echo "<h3>is_numeric(255.5): ", var_dump(is_numeric(255.5)), "</h3>";
    echo "<h3>is_numeric(\"String\"): ", var_dump(is_numeric("String")), "</h3>";

    // Casting float to integer
    echo "<hr><h4>Before casting, y = $y</h4>";
    echo "<h4>Before casting, data type of y = ", var_dump($y), "</h4>";

    $y = (int) $y;
    echo "<hr><h4>After casting, y = $y</h4>";
    echo "<h4>After casting, data type of y = ", var_dump($y), "</h4>";
    ?>
</body>
</html>