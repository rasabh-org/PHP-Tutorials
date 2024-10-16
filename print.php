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
 * In PHP, there are two basic ways to get output:
 * 1. echo
 * 2. print
 *
 * Differences between these two are:
 * 1. echo has no return value while print has a
 *  return value of 1 so it can be used in expressions.
 * 2. echo can take multiple parameters (although such usage is rare)
 *  while print can take one argument.
 * 3. echo is marginally faster than print.
 */

// Usage of echo (single parameter)
echo "<h4> Hello, World!</h4>";     // without parentheses
echo ("<h4> Hello, World!</h4>");   // with parentheses

// Usage of echo (multiple parameters)
echo "<h4>This ", "string ", "was ", "made ", "with multiple parameters.</h4>";

$course = "Learn PHP";
$site = "w3schools.com";

echo "<hr><h2>$course</h2>";
echo "<a style=\"font-size: 20px\">Learn from <b>$site</b>.</a>";

/**
 * differences between single and double quotes in PHP:
 * 1. When using double quotes, variables can be inserted embedded to the string.
 * 2. When using single quotes, variables can be inserted using the dot (.) operator.
 */

 echo '<hr><h2>' . $course . '</h2>';
 echo '<a style="font-size: 20px"> Learn from <b>' . $site . '</b>.</a>';

 // Usage of print (single parameter)
 print "<hr><h4>Hello, World!</h4>";    // without parentheses
 print ("<h4>Hello, World!</h4>");      // with parentheses

 print "<hr><h2>$course</h2>";
 print "<a style=\"font-size: 20px\">Learn from <b>$course</b></a>";

 print '<hr><h2>' . $course . '</h2>';
 print '<a style="font-size: 20px">Learn from <b>' . $course . '</b></a>';
?>
</body>
</html>