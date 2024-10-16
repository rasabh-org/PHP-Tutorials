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
     * PHP has three different variable scopes:
     * 1. Local
     * 2. Global
     * 3. Static
     */

    $x = 5;  // Global scope
    $z = 0;

    function func() {
        $y = 5; // Local scope

        // using x inside this function will generate an error
        echo "<h4>Variable x inside function is: $x</h4>";

        echo "<h4>Variable y inside function is: $y</h4>";

        /**
         * The global keyword is used to access a global variable
         * from within a function.
         */
        global $x, $z;
        $z = $x + $y;

        echo "<h4>Variable z inside function is: $z</h4>";
    }

    func();

    echo "<h4>Variable x outside function is $x.</h4>";

    // Using y outside this function will generate an error
    echo "<h4>Variable y outside function is $y.</h4>";

    echo "<h4>Variable z outside function is $z.</h4>";

    /**
     * PHP also stores all global variables in an array called $GLOBALS[index].
     * The index holds the name of the variable. This array is also accessible
     * from within functions and can be used to update global variables directly.
     */
    function func_2() {
        $GLOBALS['x'] = $GLOBALS['x'] * $GLOBALS['z'];
    }

    func_2();

    echo "<h4>Global variable x after global operation is $x.</h4>";

    function func_3() {
        static $y = 0;  // Static variable
        $y = $y + 1;

        echo "<h4>Local variable y after function call is $y.</h4>";
    }

    /**
     * Since static variables are not erased after each function call,
     * therefor the value of $y should be incremented by 1 in each function call.
     */
    func_3();
    func_3();
    func_3();
    ?>
</body>
</html>