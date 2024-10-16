<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = "Hello";
    $y = "World";

    // Method 1: Using the dot notation
    echo "<h4>";
    echo $x . ' ' . $y;
    echo "</h4>";

    // Method 2: Using the double quotes
    echo "<h4>$x $y</h4>";

    $z = $x . ' ' . $y;

    // Slice from the end of the string
    echo "<hr><h4>Start slicing 3 characters from the end of the string: ", substr($z, -5, 3), "</h4>";
    echo "<hr><h4>Slice 4 characters from the end of the string: ", substr($z, 6, -2), "</h4>";
    ?>
</body>
</html>