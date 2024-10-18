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
     * In PHP, we have the following loop types:
     * 1. while - loops through a block of code as long as the specified condition is true
     * 2. do...while - loops through a block of code once, and then repeats the loop
     *  as long as the specified condition is true
     * 3. for - loops through a block of code a specified number of times
     * 4. foreach - loops through a block of code for each element in an array
     */
    $x = 0;

    // While loop
    echo "<h2 style='color: Green'>While Loop</h2>";
    echo "<h3>Looping through 1-10:<br>";
    while ($x <= 10) {
        ++$x;

        //With the continue statement we can stop the current iteration, and continue with the next:
        if ($x % 3 == 0) continue;

        // With the break statement we can stop the loop even if the condition is still true:
        if ($x % 7 == 0) break;

        echo "$x<br>";
    }
    echo "</h3>";

    $x = 0;

    // Alternative syntax for while:
    echo "<h3>Looping through 1-10:<br>";
    while ($x <= 10):
        ++$x;

        //With the continue statement we can stop the current iteration, and continue with the next:
        if ($x % 3 == 0) continue;

        // With the break statement we can stop the loop even if the condition is still true:
        if ($x % 7 == 0) break;

        echo "$x<br>";
    endwhile;
    echo "</h3>";

    $x = 0;

    // Do-while loop
    echo "<hr><h2 style='color: Green'>Do-While Loop</h2>";
    echo "<h3>Looping through 1-10:<br>";
    do {
        ++$x;

        if ($x % 5 == 0) continue;

        if ($x == 5) break;

        echo "$x<br>";
    } while ($x < 10);
    echo "</h3>";

    // For loop
    echo "<hr><h2 style='color: Green'>For loop</h2>";
    echo "<h3>Looping through 1-10:<br>";
    for ($x = 0; $x < 10; ++$x) {
        if ($x % 3 != 0) continue;

        if ($x * 10 == 10) break;

        echo "$x<br>";
    }
    echo "</h3>";
    ?>
</body>
</html>