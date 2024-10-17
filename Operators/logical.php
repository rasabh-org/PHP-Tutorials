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
     * The PHP logical operators are used to combine conditional statements.
     */
    $x = 5;
    $y = '5';

    echo "<h3>(x == y) and (x === y): ", var_dump(($x == $y) and ($x === $y)), "</h3>";
    echo "<h3>(x == y) or (x === y): ", var_dump(($x == $y) or ($x === $y)), "</h3>";
    echo "<h3>(x == y) xor (x === y): ", var_dump(($x == $y) xor ($x === $y)), "</h3>";

    echo "<h3>(x == y) && (x === y): ", var_dump(($x == $y) && ($x === $y)), "</h3>";
    echo "<h3>(x == y) || (x === y): ", var_dump(($x == $y) || ($x === $y)), "</h3>";
    echo "<h3>!(x === y): ", var_dump(!($x === $y)), "</h3>";
    ?>
</body>
</html>