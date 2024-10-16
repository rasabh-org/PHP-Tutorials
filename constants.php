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
     * PHP Constants can be created with:
     * 1. define() function
     * 2. const keyword
     *
     * Difference between the two is:
     * 1. const cannot be created inside another block scope,
     * like inside a function or inside an if statement.
     * 2. define can be created inside another block scope.
     */
    define("GREET", "Hello, World!");
    const MSG = "Welcome to PHP Tutorial.";

    echo "<h2>", GREET, "</h2>";
    echo "<h3>", MSG, "</h3>";

    // Constant arrays
    define("ARR_CONST", ["Volvo", "BMW", "Audi"]);

    echo "<hr><h3>Values of the constant array:</h3>";
    echo "<ul><li>", ARR_CONST[0], "</li><li>", ARR_CONST[1], "</li><li>", ARR_CONST[2], "</li><ul>";

    ?>
</body>
</html>