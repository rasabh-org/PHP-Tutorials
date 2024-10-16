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
    $num = 5;   // Numeric variable
    $name = "Raan Saurav Bhuyan";  // String variable

    echo "My name is $name.<br>";
    echo "My number is " . $name . ".<br>";
    echo "My age is " . $num . ".<br>";
    echo "My age is $num.<br>";

    // var_dump() function returns the variable data type
    echo var_dump($num) . "<br>";       // Integer
    echo var_dump($name) . "<br>";      // String
    echo var_dump(5.5) . "<br>";        // Float/Double
    echo var_dump(true) . "<br>";       // Boolean
    echo var_dump([5, 13, 22]). "<br>"; // Array
    echo var_dump(NULL) . "<br>";       // NULL

    // Assigning a single value to multiple variables
    $x = $y = $z = 3;

    echo "<h3>A list of variables with the same value:</h3>";
    echo "<ul>";
    echo "<li>x = $x</li>";
    echo "<li>y = $y</li>";
    echo "<li>z = $z</li>";
    echo "</ul>";
    ?>
</body>
</html>