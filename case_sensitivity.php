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
// Single line comments
# Single line comments
/**
 * Documentation of
 * multi-line comments.
 */

// Case-insensitive keywords
echo "<h1>Document</h1>";
Echo "<h2>Document</h2>";
ECHO "<h3>Document</h3>";

// Case-sensitive variable identifiers
$color = "red";
$Color = "blue";
$COLOR = "green";

echo "<a style=\"color: red\">My color is: " . $color . "</a><br>";
echo "<a style=\"color: blue\">My color is: " . $Color . "</a><br>";
echo "<a style=\"color: green\">My color is: " . $COLOR . "</a><br>";
?>
</body>
</html>