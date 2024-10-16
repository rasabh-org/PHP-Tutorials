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
     * Differences between double and single quotes in strings:
     * 1. Double quotes process special characters.
     * 2. Single quotes process do not special characters.
     */

    $x = "Hello learner!";
    $y = "Hello Learner!";
    echo "<h2>$x</h2>";
    echo '<h2>$x</h2>';

    // strlen() returns the length of the string
    echo "<h4>Length of the string is: ", strlen($x), "</h4>";

    // str_word_count() returns the number of words
    echo "<h4>Word count of the string is: ", str_word_count($x), "</h4>";

    // strpos() searches for a specific text in the string
    echo "<h4>Search for learn in the string: ", strpos($x, "learn"), "</h4>";

    // Some string built-in functions:
    echo "<hr><h4>Comparison of strings (case insensitive) using natural order:", strnatcasecmp($x, $y), " </h4>";
    echo "<h4>Comparison of strings (case sensitive) using natural order: ", strnatcmp($x, $y), " </h4>";

    echo "<hr><h4>Comparison of strings (case insensitive) using first n chars: ", strncasecmp($x, $y, strlen($x)), " </h4>";
    echo "<h4>Comparison of strings (case insensitive) using first n chars: ", strncmp($y, $x, strlen($x)), " </h4>";

    // Cryptographic operations
    echo "<hr><h4>CRC32 of the string: ", crc32($x), " </h4>";
    echo "<h4>One way hashing of the string: ", crypt($x, "Salt"), " </h4>";
    echo "<h4>MD5 hashing of the string: ", md5($x), " </h4>";
    echo "<h4>SHA1 hashing of the string: ", sha1($x), " </h4>";

    // Case conversion
    echo "<hr><h4>Conversion to the upper case: ", strtoupper($x), " </h4>";
    echo "<h4>Conversion to the lower case: ", strtolower($x), " </h4>";
    echo "<h4>Conversion of first character to the upper case: ", ucfirst($x), " </h4>";
    echo "<h4>Conversion of first character to the upper case: ", ucwords($x), " </h4>";

    // Breaking down the string
    echo "<h4>A part of the string:", substr($x, 6) , " </h4>";
    echo "<h4>Replace a part of the string:", substr_replace($x, "Student", 6), "</h4>";

    // Reverse the string
    echo "<hr><h4>Reverse of the string: ", strrev($x), "</h4>";

    // Remove whitespace of the string
    echo "<hr><h4>Remove whitespace of the string: ", trim($x), "</h4>";

    // Convert the string into array
    echo "<hr><h4>Convert the string into array: ";
    print_r( explode(' ', $x)); // Here the space is the separator
    echo "</h4>";

    // Convert the array into a string
    $arr = array("Hi,", "my", "name", "is", "Raan!");
    echo "<hr><h4>Convert the array to a string: ", implode(' ', $arr), "</h4>";
    ?>
</body>
</html>