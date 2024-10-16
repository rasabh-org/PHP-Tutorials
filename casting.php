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
     * Casting in PHP is done with these statements:
     * 1. (string) - Converts to data type String
     * 2. (int) - Converts to data type Integer
     * 3. (float) - Converts to data type Float
     * 4. (bool) - Converts to data type Boolean
     * 5. (array) - Converts to data type Array
     * 6. (object) - Converts to data type Object
     * 7. (unset) - Converts to data type NULL
     */

    // Casting tp string
    echo "<h2 style='color: Green'>Casting to String</h2>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    echo "<h3>Data type of a: ", var_dump($a), "</h3>";

    $b = (string) $b;
    echo "<h3>Data type of b: ", var_dump($b), "</h3>";

    $c = (string) $c;
    echo "<h3>Data type of c: ", var_dump($c), "</h3>";

    $d = (string) $d;
    echo "<h3>Data type of d: ", var_dump($d), "</h3>";

    $e = (string) $e;
    echo "<h3>Data type of e: ", var_dump($e), "</h3>";

    // Casting to integer
    echo "<hr><h2 style='color: Green'>Casting to Integer</h2>";

    $a = 5;                 // Integer
    $b = 5.34;              // Float
    $c = "25 kilometers";   // String
    $d = "kilometers 25";   // String
    $e = "hello";           // String
    $f = true;              // Boolean
    $g = NULL;              // NULL

    $a = (int) $a;
    echo "<h3>Data type of a: ", var_dump($a), "</h3>";

    $b = (int) $b;
    echo "<h3>Data type of b: ", var_dump($b), "</h3>";

    $c = (int) $c;
    echo "<h3>Data type of c: ", var_dump($c), "</h3>";

    $d = (int) $d;
    echo "<h3>Data type of d: ", var_dump($d), "</h3>";

    $e = (int) $e;
    echo "<h3>Data type of e: ", var_dump($e), "</h3>";

    $f = (int) $f;
    echo "<h3>Data type of f: ", var_dump($f), "</h3>";

    $g = (int) $g;
    echo "<h3>Data type of g: ", var_dump($g), "</h3>";

    // Casting to float
    echo "<hr><h2 style='color: Green'>Casting to Float</h2>";

    $a = 5;                 // Integer
    $b = 5.34;              // Float
    $c = "25 kilometers";   // String
    $d = "kilometers 25";   // String
    $e = "hello";           // String
    $f = true;              // Boolean
    $g = NULL;              // NULL

    $a = (float) $a;
    echo "<h3>Data type of a: ", var_dump($a), "</h3>";

    $b = (float) $b;
    echo "<h3>Data type of b: ", var_dump($b), "</h3>";

    $c = (float) $c;
    echo "<h3>Data type of c: ", var_dump($c), "</h3>";

    $d = (float) $d;
    echo "<h3>Data type of d: ", var_dump($d), "</h3>";

    $e = (float) $e;
    echo "<h3>Data type of e: ", var_dump($e), "</h3>";

    $f = (float) $f;
    echo "<h3>Data type of f: ", var_dump($f), "</h3>";

    $g = (float) $g;
    echo "<h3>Data type of g: ", var_dump($g), "</h3>";

    /** Casting to boolean:
     * If a value is 0, NULL, false, or empty,
     * the (bool) converts it into false, otherwise true.
     */
    echo "<hr><h2 style='color: Green'>Casting to Boolean</h2>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    echo "<h3>Data type of a: ", var_dump($a), "</h3>";

    $b = (bool) $b;
    echo "<h3>Data type of b: ", var_dump($b), "</h3>";

    $c = (bool) $c;
    echo "<h3>Data type of c: ", var_dump($c), "</h3>";

    $d = (bool) $d;
    echo "<h3>Data type of d: ", var_dump($d), "</h3>";

    $e = (bool) $e;
    echo "<h3>Data type of e: ", var_dump($e), "</h3>";

    $f = (bool) $f;
    echo "<h3>Data type of f: ", var_dump($f), "</h3>";

    $g = (bool) $g;
    echo "<h3>Data type of g: ", var_dump($g), "</h3>";

    $h = (bool) $h;
    echo "<h3>Data type of h: ", var_dump($h), "</h3>";

    $i = (bool) $i;
    echo "<h3>Data type of i: ", var_dump($i), "</h3>";

    /**
     * Casting to array:
     * When converting into arrays, most data types converts into an indexed array with one element.
     * NULL values converts to an empty array object.
     */
    echo "<hr><h2 style='color: Green'>Casting to array</h2>";

    $a = 5;                 // Integer
    $b = 5.34;              // Float
    $c = "25 kilometers";   // String
    $d = "25";              // String
    $e = "hello";           // String
    $f = true;              // Boolean
    $g = NULL;              // NULL

    $a = (array) $a;
    echo "<h3>Data type of a: ", var_dump($a), "</h3>";

    $b = (array) $b;
    echo "<h3>Data type of b: ", var_dump($b), "</h3>";

    $c = (array) $c;
    echo "<h3>Data type of c: ", var_dump($c), "</h3>";

    $d = (array) $d;
    echo "<h3>Data type of d: ", var_dump($d), "</h3>";

    $e = (array) $e;
    echo "<h3>Data type of e: ", var_dump($e), "</h3>";

    $f = (array) $f;
    echo "<h3>Data type of f: ", var_dump($f), "</h3>";

    $g = (array) $g;
    echo "<h3>Data type of g: ", var_dump($g), "</h3>";

    // Casting to null
    echo "<hr><h2 style='color: Green'>Casting to NULL</h2>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = NULL;
    echo "<h3>Is the variable a set? ", var_dump(isset($a)), "</h3>";

    $b = NULL;
    echo "<h3>Is the variable b set? ", var_dump(isset($b)), "</h3>";

    $c = NULL;
    echo "<h3>Is the variable c set? ", var_dump(isset($c)), "</h3>";

    $d = NULL;
    echo "<h3>Is the variable d set? ", var_dump(isset($d)), "</h3>";

    $e = NULL;
    echo "<h3>Is the variable e set? ", var_dump(isset($e)), "</h3>";
    ?>
</body>
</html>