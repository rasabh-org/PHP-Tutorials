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
    $x = array('Volvo', 'BMW', 5);
    $y = array('Volvo', 'BMW', '5');

    echo "<h3>x + y = ", var_dump($x + $y), "</h3>";
    echo "<h3>x == y = ", var_dump($x == $y), "</h3>";
    echo "<h3>x === y = ", var_dump($x === $y), "</h3>";
    echo "<h3>x != y = ", var_dump($x != $y), "</h3>";
    echo "<h3>x <> y = ", var_dump($x <> $y), "</h3>";
    echo "<h3>x !== y = ", var_dump($x !== $y), "</h3>";
    ?>
</body>
</html>